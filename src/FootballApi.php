<?php
/**created by jocelin kisenga
 * kisengajocelin7@gmail.com 
 */
 namespace Lushidev\FootApi;
 use GuzzleHttp\Client;
class FootballApi
{
  
  /**
   * @ client
   * 
   */
  public $client;
   
  public function __construct($client)
  {
     $this->client = $client;
  }
  
  
  public function run($url, $type = 'GET')
    {
        return json_decode( $this->client->request($type, $url)->getBody() );
    }
    
  public function getlive()
    {
        $live = $this->run("/fixtures?live=all" );
        return collect($live);
    }
  public function fixtures(){
    $fixtures=$this->run("fixtures");
    return collect($fixtures);
  }
  
  public function leagues(){
    $leagues=$this->run("/leagues");
    return collect($leagues);
  }
    

}