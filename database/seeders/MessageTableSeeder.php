<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Message;
use App\Models\User;

class MessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener todos los usuarios
        $users = User::all();

        // Verificar si hay al menos dos usuarios para enviar un mensaje
        if ($users->count() < 2) {
            return;
        }

        // Crear algunos mensajes entre los usuarios
        foreach ($users as $sender) {
            // Excluir al mismo usuario como destinatario
            $receiver = $users->where('id', '!=', $sender->id)->random();

            Message::create([
                'sender_id' => $sender->id, // Usuario remitente
                'receiver_id' => $receiver->id, // Usuario destinatario
                'content' => 'Hello ' . $receiver->name . ', this is a test message from ' . $sender->name, // Contenido del mensaje
                'is_read' => false, // El mensaje inicialmente no se ha leído
            ]);

            // Opcionalmente, puedes agregar más mensajes entre los mismos o diferentes usuarios
            $receiver = $users->where('id', '!=', $sender->id)->random();

            Message::create([
                'sender_id' => $receiver->id,
                'receiver_id' => $sender->id,
                'content' => 'Hi ' . $sender->name . ', I received your message!',
                'is_read' => false,
            ]);
        }
    }
}
