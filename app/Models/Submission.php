<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * Get the subjects for the course.
     */
    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'course_id',
        'teacher_id',
    ];

    /**
     * Get the course that owns the subject.
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    /**
     * Get the teacher assigned to the subject.
     */
    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }
}

class Submission extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'assignment_id',
        'submitted_at',
        'grade',
    ];

    /**
     * Get the user who submitted the assignment.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the assignment that was submitted.
     */
    public function assignment()
    {
        return $this->belongsTo(Assignment::class);
    }
}