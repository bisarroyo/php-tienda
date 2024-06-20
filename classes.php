<?php
declare(strict_types=1);

class handle_user {
  public function __construct(
    readonly public string $email,
    private string $name,
    public string $password
  ){}

  public function login() {
    $this->email; 
  }

  public function signup() {

  }

  public function logout() {

  }

  public static function create() {}
}