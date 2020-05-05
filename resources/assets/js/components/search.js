let axios = require('axios');
let BASE_URL = 'https://www.googleapis.com/youtube/v3/search';

module.exports = function (options, callback){
    if(!options.apiKey){
        throw new Error('youtube erro would queruiere key');
    }


let params={
    part: 'snippet, id',
    key: options.apiKey,
    videoId:options.videoId,
    // order: 'date',
    channelId: 'UCkwy9HLQnrAzpy_zVYy1Q6Q',
    q:options.term,
    type: 'video'
};

axios.get(BASE_URL, { params })
.then(response =>{
     if(callback){ callback(response.data.items) }
     console.log(response);
})

.catch(error => console.error(error));

}
