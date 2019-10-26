<?php


class HTML
{
    public function getHi(){
        if (isset($_SESSION['user'])){
            echo "<h2>Hi ".$_SESSION['user']['username']."!</h2>
            <h4><a href='index.php?action=logout'>Logout</a></h4>
            <h4><a href='index.php?action=add_comment'>Add Comment</a> <a href='index.php?action=del_comment'>Del Comment</a></h4>" ;

        }else{
            echo"<h4><a href='index.php?action=login'>Login</a> <a href='index.php?action=register'>Register</a></h4>" ;
        }
    }
    public function getIndex($data)
    {
        $html= "<table><thead>";
        if(isset($_SESSION['user'])) {
            $html .= "<form action='index.php?action=show_comment' method='post'><th>Select</th>";
        }
        $html.="<th>User name</th><th>Comment</th></thead><tbody>";
        foreach ($data as $value) {
            $html.= "<tr>";
            if(isset($_SESSION['user'])){
                $html.="<td><input type='checkbox' name='id.$value->id' value='$value->id' ></td>";
            }
            $html.="<td> $value->username </td><td> $value->text </td></tr>";
        }
        if(isset($_SESSION['user'])) {
            $html .= "</tbody></table><input type='submit' value='Show' ></form>";
        }else{
            $html .= "</tbody></table>";
        }
        echo $html;
    }

    public function getLogin()
    {
        $html= "  <form method='post'>
                <input type='text' id='login' name='login' placeholder='Login'>
                <input type='password' name='pass' id='pass' placeholder='password'>
                <input type='submit' value='Login'>
                </form>";
        echo $html;
    }

    public function setUser()
    {
        $html= "  <form method='post'>
                <div><input type='text' id='login' name='login' placeholder='Login'></div>
                <div><input type='text' id='username' name='username' placeholder='username'></div>
                <div><input type='password' name='pass' id='pass' placeholder='password'></div>
                <div><input type='password' name='c_pass' id='c_pass' placeholder='confirmed password'></div>
                <div><input type='submit' value='Registry'></div>
                </form>";
        echo $html;
    }
    public function getShowHeader()
    {
        echo "<table><thead><th>User</th><th>Comments</th></thead><tbody>";
    }
    public function getShowFooter()
    {
        echo "</tbody></table><form method='get' action='/login-logout-addcomment-oop/'>
              <input type='submit' value='Reset'>";

    }

    public function getDelComment($data)
    {
        $html= "<h4><a href='/login-logout-addcomment-oop/'>Home</a></h4><table><thead>";
        if(isset($_SESSION['user'])) {
            $html .= "<form action='' method='post'><th>Select</th>";
        }
        $html.="<th>User name</th><th>Comment</th></thead><tbody>";
        foreach ($data as $value) {
            $html.= "<tr>";
            if(isset($_SESSION['user'])){
                $html.="<td><input type='checkbox' name='id.$value->id' value='$value->id' ></td>";
            }
            $html.="<td> $value->username </td><td> $value->text </td></tr>";
        }
        if(isset($_SESSION['user'])) {
            $html .= "</tbody></table><input type='submit' value='Delete' ></form>";
        }else{
            $html .= "</tbody></table>";
        }
        echo $html;
    }

    public function setAddComment(){
        $html="<h4><a href='/login-logout-addcomment-oop/'>Home</a></h4>
                <form method='post' action=''>
                <div><textarea name='text' id='text' placeholder='enter comment text'></textarea></div>
                <div><input type='submit' value='Submit'></div>";
        echo $html;
    }


}