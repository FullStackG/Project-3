$.ajax({
    url:'data.json',
    type: 'get',
    cache: false,
    dataType: 'json',
    success:function(logentries){
        console.log(logentries);
        for( x in logentries ){
            $("#log").append(`
            <h2>${logentries[x].text1}</h2>
	        <p>${logentries[x].email}</p>
            <p>${logentries[x].phone}</p>
            <p>${logentries[x].comments}</p>
            <p>${logentries[x].radio}</p>
            <p>${logentries[x].checkbox}</p>
	        <hr>
            `);  
        };
    }
});



