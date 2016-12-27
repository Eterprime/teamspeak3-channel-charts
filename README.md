# TeamSpeak3 Channel Charts
Application which allows you to generate clients activity charts for given channels on TeamSpeak3 server.

## Installation guide
1. Download package via git clone or download zip archive from repository. Then install PHP (version >=5.6) with [GD extension](http://php.net/manual/en/image.installation.php). 
  ```bash
  git clone https://github.com/Eterprime/teamspeak3-channel-charts.git
  ```
  
2. Rename `config.dist.php` to `config.php` and configure application properties inside this file with your favorite text editor.
  ```bash
  mv config.dist.php config.php
  vim config.php
  ```

3. Add your server IP address to `query_ip_whitelist.txt` in main directory of TeamSpeak3 server.
4. Set correct permissions for `cache` and `output` directories
  ```bash
  chmod -R +rw cache/ output/
  ```
  
5. To run application
  ```bash
  php statistics
  ```
  *To run application as background process you can use:*
  ```bash
  screen -AdmS EterprimeChannelCharts php statistics
  ```
  *or*
  ```bash
  nohup php statistics &
  ```

