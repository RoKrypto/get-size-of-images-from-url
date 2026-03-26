async function getImgHeaders(imgURL) {
    try {
        const rq = await fetch(imgURL);
        if(!rq.ok) throw new Error('se casho el sistema');
        const rsp = await rq.json();
        return rsp;
    } catch (err) {
        console.error('Esto fue lo que paso: ' + err.message);
    }
};

getImgHeaders('/sizes-of-images.php').then(console.log);