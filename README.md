Lerna Test Project
==================

This is a test repo to figure out if Lerna can manage a monorepo which includes both npm and composer packages… It can.

Notes: 

* `./packages/common` contains both a `package.json` and `composer.json`.
* Lerna versions and publishes this package to npm.
* `./packages/common/package.json` contains attributes the `directories` and `files` attributes so all the php files are installed when the user runs `npm -i @newism/common` in their project.

The consumer test project can be found here: https://github.com/newism/lerna-sub