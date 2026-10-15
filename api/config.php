<?php
/**
 * ============================================================================
 * UjianAman — Konfigurasi database MySQL
 * ----------------------------------------------------------------------------
 * Cara pakai:
 *  1. cPanel -> "MySQL® Databases" -> buat database + user, lalu ADD USER
 *     ke database (All Privileges).
 *  2. Ganti 4 nilai di bawah sesuai yang tadi dibuat.
 *  3. Upload folder `api/` ke hosting (bersama folder hasil build).
 *  4. Buka: https://domainmu/eujian-mandupa/api/index.php?action=ping
 *     -> muncul JSON berarti server & database SIAP.
 *
 * Tabel tidak perlu dibuat manual — dibuat otomatis oleh index.php.
 * ============================================================================
 */

define('DB_HOST', 'localhost');          // host MySQL cPanel (biasanya localhost)
define('DB_NAME', 'u471136757_db_ujian');   // cth. ujianaman_db
define('DB_USER', 'root'); // cth. ujianaman_user
define('DB_PASS', ''); // password database tsb

/** Zona waktu sekolah (jadwal ujian ikut zona ini). */
define('APP_ZONE', 'Asia/Jakarta');
