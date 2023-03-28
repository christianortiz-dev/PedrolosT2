
MinecraftAPI.getServerStatus('pedrolos-t2.serveminecraft.net', {
    port: 25565 // optional, only if you need a custom port
}, function (err, status) {
    if (err) {
        return document.querySelector('.server-offline').innerHTML = 'offline';
    }

    // you can change these to your own message!
    document.querySelector('.server-online').innerHTML = status.online = 'online';

    
});

