# copenhagen-university-t3kit-demo-2022

## General info

- [Contributing to t3kit](https://github.com/t3kit/.github/blob/master/CONTRIBUTING.md)
- [Code of Conduct](https://github.com/t3kit/.github/blob/master/CODE_OF_CONDUCT.md)
- [Support](https://github.com/t3kit/.github/blob/master/SUPPORT.md)
- [Security Policy](https://github.com/t3kit/.github/blob/master/SECURITY.md)

***

## Required dependencies

- [Git](https://git-scm.com/)
- [Composer](https://getcomposer.org/) >= v2.1.8
- [Docker](https://docs.docker.com/install/) >= v20.10.8
- [Docker Compose](https://docs.docker.com/compose/cli-command/#installing-compose-v2) >= v2.0.0
- [Node.js](https://nodejs.org/en/download/) >= v16.12.0
- [NPM](https://nodejs.org/en/download/) >= v8.0.0
## Quick start

1. Check that [nginx-proxy](#nginx-proxy) started
2. Clone the repository
3. `composer env` - Configure local development environment variables

    _*Note: To continue with Docker based local development you need to create an environment `.env` file for your project based on an example `local.env`. You can create `.env` file by running: `composer env` as described above or `cp .localconf/local.env .env`._

    - Check all environment variables in `.env` file and change them if it needed
    - OS-specific settings in `.env` file
        - **Linux**
            - Uncomment `USER_ID` var and set up your host user id to make the shared folder writable. (Skip this step if you are a Mac user)

4. `composer ci` - Install composer dependencies
5. `npm install` - Install npm dependencies
6. `npm run dev` - Build development assests for themes
7. `docker compose up -d` - Start all Docker services for a local development environment
7. `composer syncdb` - Sync database with PlatformSH DB

    _*Note: You can run `composer syncdb` many times. Every time when you want to update your local db from PlatformSH, run `composer syncdb`._

8. `composer syncfiles` - Sync files with PlatformSH
9. Open `copenhagenuniversityt3kit.t3.localhost` in browser *_Google Chrome_
## nginx-proxy

### [nginx-proxy for t3kit11 project](https://github.com/t3kit/t3kit-dockerhub#nproxy)

For all t3kit projects, we need just a one `nginx-proxy` started as a separate Docker container. [Based on Automated Nginx Reverse Proxy for Docker](https://github.com/nginx-proxy/nginx-proxy)

#### Setup

```shell
git clone git@github.com:t3kit/t3kit-dockerhub.git
cd t3kit-dockerhub/nproxy
docker compose up -d
```

## [README t3kit](./t3kit.md)
