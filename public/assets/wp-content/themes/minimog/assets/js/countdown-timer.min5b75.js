!function(r){"use strict";class a{DAY_IN_MS=864e5;HOUR_IN_MS=36e5;MIN_IN_MS=6e4;constructor(t,i={}){this.container=t,this.options=Object.assign({},{addZeroPrefix:!0,loop:!1,formatter:{day:"d",hour:"h",minute:"m",second:"s"},callback:()=>{}},i),this.startTime=this.options.startTime,this.savedStartTime=this.startTime,this.endTime=this.options.endTime,this.intervalTime=1e3,this.timer=null,this.starting=!1,this.start()}triggerMethod=(t,i)=>{"function"==typeof this[t]?this[t](i):this.start()};start=()=>{this.starting||(this.timer=setInterval(()=>{this.startTime>this.endTime?this.stop():this.update()},this.intervalTime),this.starting=!0)};update=()=>{this.container.text(this.format(this.endTime-this.startTime)),this.startTime+=this.intervalTime};stop=()=>{clearInterval(this.timer),this.starting=!1,this.options.loop?(this.startTime=this.savedStartTime,this.start()):(this.timer=null,this.options.callback())};clear=()=>{clearInterval(this.timer),this.timer=null,this.starting=!1,this.startTime=this.savedStartTime,this.container.text(this.format(0))};addZeroPrefix=t=>this?.options?.addZeroPrefix&&t<10?"0"+t:t.toString();format=t=>{var i=Math.floor(t/this.DAY_IN_MS),s=Math.floor(t/this.HOUR_IN_MS)%24,e=Math.floor(t/this.MIN_IN_MS)%60,t=Math.floor(t/1e3)%60;return this.getFormatText(i,"day")+this.getFormatText(s,"hour")+this.getFormatText(e,"minute")+this.getFormatText(t,"second")};getFormatText=(t,i)=>0<t||"minute"===i||"second"===i?this.addZeroPrefix(t)+this.options.formatter[i]+" ":""}const h="minimogCountdownTimer";r.fn.extend({MinimogCountdownTimer:function(s,e){return this.length?"options"===s?r.data(this.get(0),h).getOptions():this.each(function(){var t=r(this);let i=r.data(this,h);i?i.triggerMethod(s,e):(i=new a(t,s),r.data(this,h,i))}):this}})}(jQuery);