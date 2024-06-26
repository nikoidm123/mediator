<?php

require_once 'ChatRoomMediator.php';

class User {
    private string $name;
    private ChatRoomMediator $chatRoom;

    public function __construct(string $name, ChatRoomMediator $chatRoom) {
        $this->name = $name;
        $this->chatRoom = $chatRoom;
    }

    public function getName(): string {
        return $this->name;
    }

    public function sendMessage(string $message): void {
        $this->chatRoom->showMessage($this, $message);
    }
}
?>
