<?php

namespace app\models;

use app\core\Database;
use app\core\DBModel;


class News extends DBModel
{
    public string $id;
    public string $title;
    public string $description;
    public string $image;
    public int $status;
    public string $content;
    public string $date;

    public function __construct(
        $id = '',
        $title = '',
        $description = '',
        $image = '',
        $status = 0,
        $content = '',
        $date = ''
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->status = $status;
        $this->content = $content;
        $this->date = $date;
    }

    public function getId() {return $this->id;}
    public function getTitle() {return $this->title;}
    public function getDescription() {return $this->description;}
    public function getImage() {return $this->image;}
    public function getStatus() {return $this->status;}
    public function getContent() {return $this->content;}
    public function getDate() {return $this->date;}

    public function setId($id) {$this->id = $id;}
    public function setTitle($title) {$this->title = $title;}
    public function setDescription($description) {$this->description = $description;}
    public function setImage($image) {$this->image = $image;}
    public function setStatus($status) {$this->status = $status;}
    public function setContent($content) {$this->content = $content;}
    public function setDate($date) {$this->date = $date;}

    public static function tableName(): string
    {
        return 'news';
    }

    public function attributes(): array
    {
        return ['id', 'title', 'description', 'image', 'status', 'content'];
    }

    public function rules(): array
    {
        return [
        ];
    }


    public function save()
    {
        $this->content = htmlspecialchars_decode($this->content);
        $this->uploadImage();
        $this->id = uniqid();
        return parent::save();
    }

    public function uploadImage() {
        if (isset($_FILES["image"])) {

            $target_dir = "images/news/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                $this->image = "default.jpg";
                return;
            }
            
            $i = 1;
            while (file_exists($target_file)) {
                $target_file = $target_dir.pathinfo($_FILES["image"]["name"])['filename']."[".$i."]".".".pathinfo($_FILES["image"]["name"])['extension'];
                $i++;
            }
            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
            
            $this->image = basename($target_file);
        }
        
    } 

    public function updateImage() {
        if (isset($_FILES["image"])) {
            if ($_FILES["image"]["size"] == 0) {
                return;
            }

            $target_dir = "images/news/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                $this->image = "default.jpg";
                return;
            }
            
            $i = 1;
            while (file_exists($target_file)) {
                $target_file = $target_dir.pathinfo($_FILES["image"]["name"])['filename']."[".$i."]".".".pathinfo($_FILES["image"]["name"])['extension'];
                $i++;
            }
            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
            
            $this->image = basename($target_file);
        }
        
    }

    public function update(News $product)
    {
        $this->updateImage();
        $this->content = htmlspecialchars_decode($this->content);
        $sql = "UPDATE news SET title = '".$this->title."',
                                description = '".$this->description."',
                                image = '".$this->image."',
                                status = '".$this->status."',
                                content = '".$this->content."'
                                WHERE id ='$product->id'";
        $statement = self::prepare($sql);
        $statement->execute();
        return true;  
    }

    public function delete()
    {
        $sql = "UPDATE news SET is_deleted=1
                                    WHERE id='$this->id'";
        $statement = self::prepare($sql);
        $statement->execute();
        return true;
    }

    public static function getCountActive() {
        $db = Database::getInstance();
        $req = $db->query("SELECT COUNT(id) AS count FROM news WHERE is_deleted = 0 AND status = 1");
        $item = $req->fetchAll()[0];
        return $item['count'];
    }

    public static function getNewsActive(int $page, int $size) {
        if ($page > 0 && $size > 0) {
            $list = [];
            $db = Database::getInstance();
            $req = $db->query("SELECT * FROM news WHERE is_deleted = 0 AND status = 1 ORDER BY updated_at DESC LIMIT ".(($page-1)*$size).", ".$size);

            // die("SELECT * FROM news WHERE is_deleted = 0 AND status = 1 LIMIT ".(($page-1)*$size).", ".$size);
    
            foreach ($req->fetchAll() as $item) {
                $list[] = new News($item['id'], $item['title'], $item['description'], $item['image'], $item['status'], $item['content'], $item['updated_at']);
            }
    
            return $list;
        }
        return [];
    }
    public static function getNewsRelated($id) {
            $db = Database::getInstance();
            $req = $db->query("SELECT * FROM news WHERE is_deleted = 0 AND status = 1 ORDER BY updated_at DESC");
    
            $fetchData = $req->fetchAll();
            foreach ($fetchData as $key => $item) {
                if ($item['id'] == $id) {
                    $prev = '';
                    $next = '';
                    if ($key != 0) $prev = $fetchData[$key-1]['id'];
                    if ($key != count($fetchData)-1) $next = $fetchData[$key+1]['id'];
                    return ['prev' => $prev, 'next' => $next];
                }
            }
            return ['prev' => '', 'next' => ''];
    }

    public static function getAllNews()
    {
        $list = [];
        $db = Database::getInstance();
        $req = $db->query('SELECT * FROM news WHERE is_deleted = 0 ORDER BY updated_at DESC');

        foreach ($req->fetchAll() as $item) {
            $list[] = new News($item['id'], $item['title'], $item['description'], $item['image'], $item['status'], $item['content'], $item['updated_at']);
        }

        return $list;
    }

    public static function getAllNewsActive()
    {
        $list = [];
        $db = Database::getInstance();
        $req = $db->query('SELECT * FROM news WHERE is_deleted = 0 AND status = 1 ORDER BY updated_at DESC');

        foreach ($req->fetchAll() as $item) {
            $list[] = new News($item['id'], $item['title'], $item['description'], $item['image'], $item['status'], $item['content'], $item['updated_at']);
        }

        return $list;
    }

    public static function getNews(int $limit)
    {
        $list = [];
        $db = Database::getInstance();
        $req = $db->query('SELECT * FROM news WHERE is_deleted = 0 AND status = 1 ORDER BY updated_at DESC LIMIT '.$limit);

        foreach ($req->fetchAll() as $item) {
            $list[] = new News($item['id'], $item['title'], $item['description'], $item['image'], $item['status'], $item['content'], $item['updated_at']);
        }

        return $list;
    }

    public static function getNewsDetail($id)
    {
        $db = Database::getInstance();
        $req = $db->query("SELECT * FROM news WHERE id = '$id' AND is_deleted = 0");
        
        $item = $req->fetchAll();
        if (count($item) > 0) {
            $item = $item[0];
            $product = new News($item['id'], $item['title'], $item['description'], $item['image'], $item['status'], $item['content'], $item['updated_at']);
            return $product;
        }
        return null;
    }


    public static function getNewsByKeyword($keyword)
    {
        $list = [];
        $db = Database::getInstance();
        $req = $db->query("SELECT * FROM news WHERE title LIKE '%$keyword%' ORDER BY updated_at DESC;");

        foreach ($req->fetchAll() as $item) {
            $list[] = new News($item['id'], $item['title'], $item['description'], $item['image'], $item['status'], $item['content'], $item['updated_at']);
        }
        return $list;
    }
}