## Pam's Website

Built with React

### Set up
- install node with `brew install node` or use [nvm](https://nodejs.org/en/download/package-manager/#nvm)
- run `npm install`

### Running Locally
- `npm start`
- Visit localhost:3006

### Github Actions Overview

I used the static webpage workflow that comes out of the box with Github actions as my initial template. It will deploy anything in /public/.

I had to add some steps to install npm and do the above install steps. Finally to build production assets is `npm run build` which will dump everything into a folder called /build/

Github pages has pretty good documentation: <https://docs.github.com/en/pages/quickstart>. My domain is registered with Google so the steps pretty much worked flawlessly on the first try for me. 

Important to note if you want SSL and for both <www.pamgluss.com> AND <pamgluss.com> to work you need to do the extra work with your DNS outlined here: <https://docs.github.com/en/pages/configuring-a-custom-domain-for-your-github-pages-site/verifying-your-custom-domain-for-github-pages> AND here: <https://docs.github.com/en/pages/configuring-a-custom-domain-for-your-github-pages-site/managing-a-custom-domain-for-your-github-pages-site>