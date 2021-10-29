<?php
$nilaiSiswa = [
  ['nama' => 'Andi', 'nilai' => 80],
  ['nama' => 'Budi', 'nilai' => 40],
  ['nama' => 'Candra', 'nilai' => 20],
  ['nama' => 'Denis', 'nilai' => 70],
  ['nama' => 'Febrian', 'nilai' => 100],
  ['nama' => 'Gunawan', 'nilai' => 90],
  ['nama' => 'Hendra', 'nilai' => 35],
  ['nama' => 'Ian', 'nilai' => 75],
];

$nilai30Kebawah = array_filter($nilaiSiswa, function ($item)
{
  return $item['nilai'] <= 30;
});

$nilaiYangLebihDari80 = array_filter($nilaiSiswa, function ($item)
{
  return $item['nilai'] <= 30;
});
?>
