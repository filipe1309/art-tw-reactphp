# <p align="center">TW - ReactPHP</p>

<p align="center">
    <img src="https://img.shields.io/badge/Code-PHP-informational?style=flat-square&logo=php&color=777bb4&logoColor=8892BF" alt="PHP" />
    <img src="https://img.shields.io/badge/Tools-Docker-informational?style=flat-square&logo=docker&color=2496ED" alt="Docker" />
</p>

## 💬 About

This project was developed following TreinaWeb [Introdução à programação assíncrona em PHP usando o ReactPHP](https://www.treinaweb.com.br/blog/introducao-a-programacao-assincrona-em-php-usando-o-reactphp/) article.

## :computer: Technologies

- [PHP](https://www.php.net/)
- [Nginx](https://www.nginx.com/)
- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

## :scroll: Requirements

- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

## :cd: Installation

```sh
git clone git@github.com:/{{ REPLACE_WITH_YOUR_REPO_NAME }}.git
```

```sh
cd {{ REPLACE_WITH_YOUR_REPO_NAME }}
```

## :runner: Running

```sh
docker-compose up

awk 'BEGIN { n = 1; while (n < 10000000) print (n++) }' > src/streams/numbers.txt

docker exec -it 907e5782e57b php src/event-loop/periodic-timer.php
docker exec -it 907e5782e57b php src/event-loop/timer.php

docker exec -it 907e5782e57b php src/streams/big-file-no-stream.php
docker exec -it 907e5782e57b php src/streams/readable-resource-stream.php
docker exec -it 907e5782e57b php src/streams/readable-resource-stream-filesystem.php

docker exec -it 907e5782e57b php src/http/verify-links-no-http.php
docker exec -it 907e5782e57b php src/http/verify-links-with-http.php
```

> Access http://localhost:8000

<!-- ## :white_check_mark: Tests

After up the container:

```sh
docker-compose exec -t {{ CONTAINER_SERVICE_NAME }} ./vendor/bin/phpunit
```

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate. -->

## License

[MIT](https://choosealicense.com/licenses/mit/)

## About Me

<p align="center">
    <a style="font-weight: bold" href="https://www.linkedin.com/in/filipe1309/">
    <img style="border-radius:50%" width="100px; "src="https://github.com/filipe1309.png"/>
    </a>
</p>

---

<p align="center">
    Done with ♥ by <a style="font-weight: bold" href="https://www.linkedin.com/in/filipe1309/">filipe1309</a> 🖖
</p>

---

> @ Generated with [ShubcoGen™](https://github.com/filipe1309/shubcogen) 0.17.5
