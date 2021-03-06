# CiviCRM: Habitat Susquehanna Tweaks

CiviCRM cusomizations for Habitat Susquehanna

The extension is licensed under [GPL-3.0](LICENSE.txt).

## Features

### Customizations to event infromation pages:
Only if all of the following are true:

* The user is not logged in, and
* The event is of type "Construction"

Then make these changes on the event info page:

* Replace each "Register Now" button with a button labeled "Create Account" which links to https://habitatsusq.org/volunteer-with-habitat/construction-volunteers/introduction-to-construction-volunteer-registration/​
* Add this text at the top and bottom of the page:  
  `You must first register for an account prior to registering for an event.`


## Requirements

* PHP v7.0+
* CiviCRM 5.0

## Installation (Web UI)

This extension has not yet been published for installation via the web UI.

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl com.joineryhq.habsusqtweaks@https://github.com/JoineryHQ/com.joineryhq.habsusqtweaks/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/JoineryHQ/com.joineryhq.habsusqtweaks.git
cv en habsusqtweaks
```

## Usage

No configuration is needed. Simply install the extension.

## Support
![Joinery](/images/joinery-logo.png)

Joinery provides services for CiviCRM including custom extension development, training,
data migrations, and more. We aim to keep this extension in good working order, and
will do our best to respond appropriately to issues reported on its [github issue queue](https://github.com/JoineryHQ/com.joineryhq.habsusqtweaks/issues).
In addition, if you require urgent or highly customized improvements to this extension,
we may suggest conducting a fee-based project under our standard commercial terms.
In any case, the place to start is the [github issue queue](https://github.com/JoineryHQ/com.joineryhq.habsusqtweaks/issues) --
let us hear what you need and we'll be glad to help however we can.

And, if you need help with any other aspect of CiviCRM -- from hosting to custom
development to strategic consultation and more -- please contact us directly via
https://joineryhq.com