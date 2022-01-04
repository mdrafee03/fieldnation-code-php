<?php
class TabularArrayObject extends ArrayObject
{
    function displayAsTable()
    {
        $table =  "<table>";
        $iterator = $this->getIterator();
        $table .= "<thead><tr><th>Key</th><th>Value</th></tr><thead>";
        $table .= "<tbody>";
        for ($iterator; $iterator->valid(); $iterator->next()) {
            $table .= "<tr><td>{$iterator->key()}</td><td>{$iterator->current()}</td></tr>";
        }
        $table .= "</tbody>";
        $table .= "</table>";
        return $table;
    }
}
