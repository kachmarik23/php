<?php
require_once 'HTML.php';

class Comment
{
    private $dbh;
    public function __construct()
    {
        $this->dbh=DBh::getInstance();
    }

    public function index()
    {
        $dbh=$this->dbh;
        $data=$dbh->query('SELECT * FROM `comments`',PDO::FETCH_OBJ );
        $html=new HTML();
        $html->getIndex($data);
    }

    public function show($comment_id)
    {
        $html=new HTML();
        $html->getShowHeader();

        foreach ($comment_id as $id){
            $dbh=$this->dbh;
            $query=('SELECT * FROM `comments` WHERE `id`=:id');
            $res=$dbh->prepare($query);
            $res->execute([':id'=>$id]);
            $res=$res->fetch(PDO::FETCH_OBJ);
            echo "<tr><td>$res->username</td><td>$res->text</td></tr>";
        }
        $html->getShowFooter();
    }

    public function delete($username)
    {
        $dbh=$this->dbh;
        if(isset($_POST)){
            foreach ($_POST as $id) {
                $query=('DELETE FROM `comments` WHERE `id`=:id LIMIT 1');
                $res=$dbh->prepare($query);
                $res->execute([':id'=>$id]);
            }
        }
        $query=('SELECT * FROM `comments` WHERE `username`=:username');
        $res=$dbh->prepare($query);
        $res->execute([':username'=>$username]);
        $res=$res->fetchAll(PDO::FETCH_OBJ);
        $html=new HTML();
        $html->getDelComment($res);

    }

    public function add($text)
    {
        if(strlen($text)<12){
            die('Text not found or less than 12 symbols');
        }
        $dbh=$this->dbh;
        $query=('INSERT INTO comments(text,username)VALUES(:text,:username)');
        $res=$dbh->prepare($query);
        $res->execute([':text'=>$text,':username'=>$_SESSION['user']['username']]);
        if($res->rowCount()>0){
            header('Location: /login-logout-addcomment-oop/');
        }
    }
}