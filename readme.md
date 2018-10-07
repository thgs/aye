

### About Aye

Well this is my small remote control. Ever wanted to change the volume on your laptop that is a couple of meters away from you and had to stand up and do it? Is your phone next to you ? Well.. this app tries to allow you control over your laptop computer from your phone.

### Help

To start `artisan serve` I use this in zsh, so it starts in correct interface

```zsh
aye() {
    ~/artisan serve --host=$(ip addr | grep 'state UP' -A2 | tail -n1 | awk '{print $2}' | cut -f1 -d'/')
}
```

### Contributing

Any contribution is welcome

