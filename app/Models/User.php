<?php

namespace Skilearn\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Html;

class User extends Authenticatable
{
      /**
       * The attributes that are mass assignable.
       *
       * @var array
       */
      protected $fillable = [
          'name',
          'email',
          'username',
          'password',
          'first_name',
          'last_name',
          'hub',
          'location',
          'affiliate',
      ];

      /**
       * The attributes excluded from the model's JSON form.
       *
       * @var array
       */
      protected $hidden = [
          'password',
          'remember_token',
      ];

      public function getName()
      {
                if ($this->first_name && $this->last_name) {
                    return "{$this->first_name} {$this->last_name}";
                }
        if ($this->first_name) {
          return $this->first_name;
        }
        return null;
   }
//    HACK username

   public function getUsername()
      {
                if ($this->username) {
                    return "{$this->username}";
                }
        if ($this->username) {
          return $this->username;
        }
        return null;
   }
   //    HACK password

   public function getPassword()
      {
                if ($this->password) {
                    return "{$this->password}";
                }
        if ($this->password) {
          return $this->password;
        }
        return null;
   }
   //    HACK user id

      public function getLocation()
         {
                   if ($this->location) {
                       return "{$this->location}";
                   }
           if ($this->location) {
             return $this->location;
           }
           return null;
      }
// HACK
    public function getNameOrUsername()
  {
      return $this->getName() ?: $this->username;
  }

      public function getFirstNameOrUsername(){
      return $this->first_name ?: $this->username;
  }

  public function getAvatarUrl()
    {
     return "/images/skylearn_male.png";
    }

  public function friendsOfMine()
  {
    return $this->belongsToMany('Skilearn\Models\User', 'friends', 'user_id', 'friend_id');
  }

  public function friendOf()
  {
    return $this->belongsToMany('Skilearn\Models\User', 'friends', 'friend_id', 'user_id');
  }

  public function friends()
  {
    return $this->friendsOfMine()->wherePivot('accepted', true)->get()->
    merge($this->friendOf()->wherePivot('accepted', true)->get());
  }

  public function FriendRequest()
  {
    return $this->friendsOfMine()->wherePivot('accepted', false)->get();
  }

  public function FriendRequestPending()
  {
    return $this->friendOf()->wherePivot('accepted', false)->get();
  }

    public function hasFriendRequestPending(User $user)
    {
        return (bool) $this->FriendRequestPending()->where('id', $user->id)->
        count();
    }

    public function hasFriendRequestReceived(User $user)
    {
      return $this->FriendRequest()->where('id', $user->id)->count();
    }

    public function addFriend(User $user)
    {
      $this->friendOf()->attach($user->id);
    }

    public function acceptFriendRequest(User $user)
    {
      $this->FriendRequest()->where('id', $user->id)->first()->pivot->
      update([
        'accepted' => true,
      ]);
    }

    public function isFriendWith(User $user)
    {
      return (bool) $this->friends()->where('id', $user->id)->count();
    }
  //HACK statuses
  public function statuses()
  {
    return $this->hasMany('Skilearn\Models\Status', 'user_id');
  }

  //HACK Ainotes
public function Ainotes()
{
  return $this->hasMany('Skilearn\Models\Ainote', 'user_id');
}
//HACK Ainotes----NOTE
public function AinoteNote()
{
return $this->hasMany('Skilearn\Models\AinoteNote', 'user_id');
}

//HACK CLOUDUPLOADER
public function CloudUploder()
{
return $this->hasMany('Skilearn\Models\CloudUploder', 'user_id');
}

  //HACK TODOS
public function todos()
{
  return $this->hasMany('Skilearn\Models\Todo', 'user_id');
}

//HACK ADELA
public function adela()
{
return $this->hasMany('Skilearn\Models\Adela', 'user_id');
}

//HACK ADELADB
public function ADELADB()
{
return $this->hasMany('Skilearn\Models\AdelaDB', 'user_id');
}

//HACK CALENDAR
public function Calendar()
{
return $this->hasMany('Skilearn\Models\Calendar', 'user_id');
}
//HACK SIMPLE CALENDAR
public function SimpleCalendar()
{
return $this->hasMany('Skilearn\Models\SimpleCalendar', 'user_id');
}

//HACK SIMPLE CALENDAR
public function SchoolCalendar()
{
return $this->hasMany('Skilearn\Models\SchoolCalendar', 'user_id');
}

//HACK SCHOOL YEAR
public function SchoolCalYear()
{
return $this->hasMany('Skilearn\Models\SchoolCalYear', 'user_id');
}

//HACK MY TASK
public function MyTask()
{
return $this->hasMany('Skilearn\Models\MyTask', 'user_id');
}

//HACK EXAM
public function MyExam()
{
return $this->hasMany('Skilearn\Models\MyExam', 'user_id');
}

    //HACK subjects
  public function MySubject()
  {
    return $this->hasMany('Skilearn\Models\MySubject', 'user_id');
  }

      //HACK subjects
  public function zone_ques()
  {
    return $this->hasMany('Skilearn\Models\zone_ques', 'user_id');
  }

//HACK EXP
public function Exp()
{
return $this->hasMany('Skilearn\Models\Exp', 'user_id');
}

//HACK EXP
public function facts()
{
return $this->hasMany('Skilearn\Models\facts', 'user_id');
}

}
