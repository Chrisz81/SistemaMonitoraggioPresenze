<?

class SchedaFuncs extends DbFuncs
{
    function selectDipendenti()
    {
        $query="SELECT * FROM scheda";
        return $this->select($query, []);
    }
    
}