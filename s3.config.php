<?php
$CONFIG = array (
  'objectstore' => 
  array (
    'class' => '\\OC\\Files\\ObjectStore\\S3',
    'arguments' => 
    array (
      'bucket' => '{S3BUCKET}',
      'autocreate' => true,
      'key' => '{S3KEY}',
      'secret' => '{S3SECRET}',
      'hostname' => '{S3HOSTNAME}',
      'port' => {S3PORT},
      'use_ssl' => true,
      'region' => '{S3REGION}',
      'use_path_style' => true,
    ),
),
);
