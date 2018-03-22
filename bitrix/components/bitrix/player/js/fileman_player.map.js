{"version":3,"sources":["fileman_player.js"],"names":["BX","namespace","window","Fileman","PlayerManager","isStarted","players","playing","addPlayer","player","this","push","bindPlayerEvents","autostart","lazyload","init","ready","bind","throttle","onScroll","setTimeout","delegate","events","getEventList","i","length","addCustomEvent","proxy","eventName","onCustomEvent","topVisiblePlayer","isAnyPlaying","id","splice","inited","isVisibleOnScreen","active","isEnded","isPlaying","pause","isReady","mute","disableMute","play","getElementCoords","VISIBLE_OFFSET","box","getBoundingClientRect","elementHeight","bottom","top","elementWidth","right","left","coords","pageYOffset","pageXOffset","originTop","originLeft","originBottom","originRight","screens","onScreen","visible","clientHeight","document","documentElement","windowTop","scrollTop","windowBottom","parseInt","topVisible","bottomVisible","playerElement","playerCenterX","playerCenterY","currentPlayerCenterElement","elementFromPoint","parentNode","getPlayerById","Player","params","fillParameters","fireEvent","onClick","onKeyDown","prototype","playButton","findChildByClassName","getElement","focus","vjsPlayer","isReady_","paused","e","ended","setPlayedState","storageHash","__getStorageHash","localStorage","set","isPlayed","get","sources","src","createElement","node","tagName","isAudio","className","skin","attrs","width","height","muted","create","hasFlash","playbackRate","volume","playlistParams","startTime","wmvConfig","onInit","event","which","preventDefault","stopPropagation","setSource","source","getSource","videojs","on","hasStarted","error","message","addEventListener","one","currentTime","spinner","findChild","class","remove","playlist","type","isFunction","isNotEmptyString","removeCustomEvent"],"mappings":"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","file":""}