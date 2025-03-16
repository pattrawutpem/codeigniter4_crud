<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "name"; // ชื่อ table ในฐานข้อมูล
    protected $primaryKey = "id"; // ชื่อ primary key
    protected $allowedFields = ['id', 'name', 'email', 'password', 'user_img']; // ฟิลด์ที่อนุญาตให้ทำการ insert หรือ update
    protected $useTimestamps = true; // เปิดใช้งานการบันทึกเวลาอัตโนมัติ
    protected $createdField  = 'created_at'; // ชื่อฟิลด์สำหรับบันทึกเวลาที่สร้างข้อมูล
    protected $updatedField  = 'updated_at'; // ชื่อฟิลด์สำหรับบันทึกเวลาที่อัปเดตข้อมูล
}
