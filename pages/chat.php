
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<div>
    <div id = "chat" class="container message">
        <div id = "message-field">
            <?php foreach ($messages as $message){ ?>
                <div  class = "row main-text message">
                    <div class="col-12 col-md-2 col-xl-2">
                        <strong><Span><?=$message['username']?></Span>:</strong><br>
                        <Span><?php $times = explode(" ", $message['time']); 
                        echo '<i>'.$times[0].'</i> '.$times[1] ?></Span>
                    </div>
                    <div class="col col-md-10 col-xl-10">
                        <span><?=$message['message']?></span>
                    </div>
                </div>
            <?php } ?>
        </div>
        <hr class="chat">
        
            <div class = "row">
            
                <div class="col col-md-10 col-xl-10" style="padding-left: 0">
                    <textarea id="message" name="message" class="chat input form-control"cols="50" rows="2" placeholder="Message" required form="chat-form"></textarea>
                </div>
                <div class="col-12 col-md-2 col-xl-2" style="padding-left: 0; padding-right: 0">
                <form action="?page=chat" method="POST" id="chat-form">
                    <input class="chat input" id="username" name="username" type="text" placeholder="Your username" required pattern="\w{4,10}" value="<?= $usr ?>">
                    <input class="input" id="chat-button" type="submit" >
                    </form> 
                </div>
                
            </div>
        

    </div>
</div>
