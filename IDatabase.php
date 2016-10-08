<?php
namespace db;
interface IDatabase{
    function connect();
    function query();
    function close();
}
echo '1';
