function showNotification(){
    const notification = new Notification("New message from dcode!",{
      body:"toto is a big toto"
    });
}

  if(Notification.permission === "granted"){
    showNotification();


  }else if(Notification.permission !== "denied"){
    Notification.requestPermission().then(permission =>{
      if (permission === 'granted'){
        showNotification();
      }

    });
  }
