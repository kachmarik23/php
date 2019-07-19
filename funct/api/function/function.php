<?php
require '../buildTable.php';
function getMainView (){
    $layOut=getLayout();
    $mainContent=getMainContent();
    return sprintf($layOut,$mainContent);
}

function getOtherView (){
    $layOut=getLayout();
    $mainContent=getOtherContent();
    return sprintf($layOut,$mainContent);
}
function getLoginView (){
    $layOut=getLayout();
    return sprintf($layOut,"
    <form action='index.php?action=login' method='post'>
        <input type='text' name='login' placeholder='Login'>
        <input type='password' name='pss' placeholder='Pass'>
        <input type='submit' value='LogIn'>
    </form>
    ");
}
function getLogoutView (){
    $layOut=getLayout();
    return sprintf($layOut,'Logout ');
}

function getLayout(){
    $html = "<div style='height: 40px; background-color: aquamarine'>
                Header
            </div>
            <div style='height: 300px; background-color: #f7f7f7f7'>
            %s
            </div>";
    return $html;
}
function getMainContent(){
    $arr =['type'=>'content',
        'avtor'=>'admin'];
    $table = buildTable($arr);
    return 'Это мой контент'.$table;
}

function getOtherContent(){
    return 'Это другой контент';
}
