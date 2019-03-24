<?php

namespace App;

use Config;
use App\Message;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','lastname','address','phone','user_photo','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function getRouteKeyName()
    {
        return 'firstname';
    }


    public function advertisments()
    {
        return $this->hasMany('App\Advertisment');
    }


    public function sentMessages()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    /**
     * A user has many messages (received).
     *
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function receivedMessages()
    {
        return $this->hasMany(Message::class, 'recipient_id');
    }

    public function isRecipient (Message $message)
    {
        return $this->id === $message->recipient_id;
    }

    /**
     * Returns whether the current User has any unread messages.
     *
     * @return boolean
     */
    public function hasUnreadMessages ()
    {
        return count(Message::where('recipient_id', $this->id)->where('read', 0)->get()) > 0;
    }

    /**
     * Returns whether the current User has any unread messages from a specific sender.
     *
     * @return boolean
     */
    public function hasUnreadMessagesFromSender (User $user)
    {
        return count(Message::where('recipient_id', $this->id)->where('sender_id', $user->id)->where('read', 0)->get()) > 0;
    }

    /**
     * Returns a Collection of messages received by the current User, from a specific sender.
     *
     * @return Illuminate\Support\Collection
     */
    public function receivedMessagesFromSender (User $user)
    {
        return Message::where('recipient_id', $this->id)->where('sender_id', $user->id)->where('read', 0)->get();
    }

    /**
     * Returns the count of unread messages for the current User.
     *
     * @return int
     */
    public function unreadMessageCount ()
    {
        return count(Message::where('recipient_id', $this->id)->where('read', 0)->get());
    }

    /**
     * Returns the count of unread messages for the current User, given a specific sender.
     *
     * @return int
     */
    public function unreadMessageCountForSender (User $user)
    {
        return count(Message::where('recipient_id', $this->id)->where('sender_id', $user->id)->where('read', 0)->get());
    }




}
