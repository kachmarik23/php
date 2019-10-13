<?php
interface Authorizer
{
    public function login();
    public function logout();
}
interface Additional
{
    public function add();
}
class VKAuthorizes implements Authorizer
{

    public function login()
    {
        // TODO: Implement login() method.
    }

    public function logout()
    {
        // TODO: Implement logout() method.
    }
}
class FBAuthorizes implements Authorizer, Additional
{

    public function login()
    {
        // TODO: Implement login() method.
    }

    public function logout()
    {
        // TODO: Implement logout() method.
    }

    public function add()
    {
        // TODO: Implement add() method.
    }
}
class ALog
{
    public function login()
    {

    }
}
class GooglePlus extends ALog implements Authorizer
{

    public function logout()
    {
        // TODO: Implement logout() method.
    }
}