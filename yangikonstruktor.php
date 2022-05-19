<?php

/*Bu kod @By_Alik tomonidan yozib 
chiqildi va @ViPBuilderUz kanali orqali tarqatildi!
kot bo'lsang manbani olaver insofsizlar.

Ushbu kodni hostingda ViPBuilder nomli papka ichiga joylashtiring!
Aks holda ochilgan botlar ishlamaydi.

Ushbu kodni Alijonov Abdulbosit (@By_Alik) tomonidan yozib chiqildi.*/

define('By_Alik',"5236533196:AAHM-WyGoIFw3zNV3IUJQMZJ6DCMmwNlCac"); 

$admin = "5103585058";

 include("panel.php");

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".By_Alik."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

function joinchat($chatid){
    global $name, $cmid;
    $result = bot('getChatMember',[
    'chat_id'=>"-1001740724455", 
    'user_id'=>$chatid
    ])->result->status;
    
        $results = bot('getChatMember',[
    'chat_id'=>"-1001740724455",
    'user_id'=>$chatid
    ])->results->status;
    
    if($result == "creator" or $result == "administrator" or $result == "member" or $results == "creator" or $results == "administrator" or $results == "member"){
        return true;
    } else {
        bot('deleteMessage',[
        'chat_id'=>"-1001740724455",       'message_id'=>$cmid
        ]); 
        bot('sendMessage',[
        'chat_id'=>$chatid,
        'text'=>"🔐 <b>@YalqovCoder ga obuna bo'lmasangiz botdan foydalana olmaysiz!</b>",
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
        [['text'=>"✅ Tekshirish",'callback_data'=>"tekshir"]]
        ]
        ])
        ]);
        return false;
    }
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$cid = $message->chat->id;
$tx = $message->text;
$from_id = $update->message->from->id;
$mid = $message->message_id;
$name = $message->from->first_name;
$fid = $message->from->id;
$callback = $update->callback_query;
$message = $update->message;
$mid = $message->message_id;
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
$gname = $message->chat->title;
$left = $message->left_chat_member;
$new = $message->new_chat_member;
$name = $message->from->first_name;
$repid = $message->reply_to_message->from->id;
$repname = $message->reply_to_message->from->first_name;
$newid = $message->new_chat_member->id;
$leftid = $message->left_chat_member->id;
$newname = $message->new_chat_member->first_name;
$leftname = $message->left_chat_member->first_name;
$username = $message->from->username;
$cmid = $update->callback_query->message->message_id;
$cusername = $message->chat->username;
$repmid = $message->reply_to_message->message_id; 
$ccid = $update->callback_query->message->chat->id;
$cuid = $update->callback_query->message->from->id;
$cqid = $update->callback_query->id;
$nameuz = "<a href='tg://user?id=$callfrid'>$callname $surname</a>";
$nameru = "<a href='tg://user?id=$uid'>$name $familya</a>";

$reply = $message->reply_to_message->text;
$nomer = $message->contact->phone_number;

$rpl = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);

$photo = $update->message->photo;
$gif = $update->message->animation;
$video = $update->message->video;
$music = $update->message->audio;
$voice = $update->message->voice;
$sticker = $update->message->sticker;
$document = $update->message->document;
$for = $message->forward_from;
$forc = $message->forward_from_chat;
$data = $callback->data;
$callid = $callback->id;
$cname = $calback->message->from->first_name;
$ccid = $callback->message->chat->id;
$cmid = $callback->message->message_id;
$cfid = $callback->message->from->id;
$user = $message->from->username;
$botname = bot('getme',['bot'])->result->username;
$inlinequery = $update->inline_query;
$inline_id = $inlinequery->id;
$inlineid = $inlinequery->from->id;
$inline_query = $inlinequery->query;
$adminuser = "YalqovCoder";
mkdir("referal");
mkdir("stat");
mkdir("step");
mkdir("user");
mkdir("prouser");
mkdir("user/$fid");
mkdir("prouser/$fid");
mkdir("ban");
if(!file_exists("referal/$fid.txt")){  
    file_put_contents("referal/$fid.txt","0");
}

if(file_get_contents("stat/stat.txt")){
} else{
file_put_contents("stat/stat.txt", "0");
}

$referalsum = file_get_contents("referal/$fid.txt");
$referalid = file_get_contents("referal/$fid.referal");
$referalcid = file_get_contents("referal/$ccid.referal");
$userstep = file_get_contents("step/$fid.txt");

$soni = file_get_contents("soni/$idi.soni");
if(!$soni) $soni = 0;

$stat = file_get_contents("stat/usid.txt");

$main_menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
          [['text'=>"🛠 Botlarni boshqarish 🛠"]],
[['text'=>"📱Kabinet"],['text'=>"💸 Pul ishlash"]],
[['text'=>"🛒 Bot do'koni"],['text'=>"📨 Bog‘lanish"]],
[['text'=>"📊 Statistika"],['text'=>"📚 Qo'llanma"]], 
]
]);


$select_menu = json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
    [['text'=>"➕ Yangi bot ochish"]],
[['text'=>"⚙ Botlarni sozlash"],['text'=>"💸Kunlik to'lov"]],
    [['text'=>"◀️Ortga"]]
    ]
    ]);

$bots_menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔥 Botlar ro'yxati"],['text'=>"⭐ Maxsus botlar"]],
[['text'=>"⚡Botlar haqida"],['text'=>"◀️Ortga"]],
]
]);

$bot_menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🕹️Maker Bot"]],
[['text'=>"◀️Orqaga"]],
]
]);

$back_menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀️Ortga"]]
]
]);

$back_menu2 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀️Ortga"]]
]
]);

$back_menu1 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀️Ortga"]]
]
]);

$oplata_menu = json_encode([
        'inline_keyboard'=>[
        [['text'=>"☎️ Tex. Yordam",'url'=>"https://t.me/$adminuser"]]
        ]
]); 

$getss = file_get_contents("ban/banid.txt");
if(mb_stripos($getss, $tx)!==false){
bot('sendMessage',[
'chat_id' => $cid,
'text' => "Kechirasiz <b>$name</b> siz 🚫bloklangansiz!",
'parse_mode'=>'html',
]); 
return false;
}

if(isset($message)){
    $get = file_get_contents("stat/usid.txt");
    if(mb_stripos($get,$fid)==false){
        file_put_contents("stat/usid.txt", "$getn$fid");
        bot('sendMessage',[
          'chat_id'=>"",
          'text'=>"😄 Yangi aʼzon👤 Ismi: $namen🆔 raqami: $fidn✳️ Usernamesi: @$usern💡 Lichka: <a href='tg://user?id=$fid'>$name</a>",
          'parse_mode'=>"html"
          ]);
    }
}

if($inlineid !== NULL){
bot('answerInlineQuery',[
    'inline_query_id'=>$inline_id,
    'cache_time'=>1,
    'results'=>json_encode([
    ['type'=>'article',
    'id'=>1,
    'title'=>"Referal havolangizni yuborish uchun bosing",
    'input_message_content'=>[
    'disable_web_page_preview'=>true,
    'parse_mode'=>'MarkDown',
    'message_text'=>"⚡️ Bir necha daqiqada o'z Telegram botingizga ega bo'ling!

⬇️ Buning uchun quyidagi havolada ko'rsatilgan botga o‘ting:
https://t.me/$botname?start=$cid",
    ],
    'reply_markup'=>[
     'inline_keyboard'=>[
     [['text'=>"➡️Botga kirish",'url'=>"https://t.me/$botname?start=$inlineid"]]
     ]
     ]
     ],
])
]);
}

$on = file_get_contents("on.txt");

if ($on == "off" && $cid = "$admin") {

bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"⚠️<b>@$bot da texnik ishlar olib borilmoqda, bir necha soatdan so‘ng botga qayta /start bosing!</b>",
        'parse_mode'=>'html',
]);
}
if($text == "❌Botni o‘chirish" && $cid == $admin){
file_put_contents("on.txt","off");
bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"⚠️<b>Offline.</b>",
        'parse_mode'=>'html',
]);
}

if($text == "✅Botni yoqish" && $cid == $admin){
file_put_contents("on.txt","on");
bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"⚠️<b>Online</b>",
        'parse_mode'=>'html',
]);
}

if ($tx == "/start"){
    if(joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id' => $cid,
    'text' => "<b>🖥 Asosiy menyuga qaytdingiz</b>",
    'parse_mode'=>'html',
    'reply_markup'=>$main_menu
    ]);
}
} elseif (mb_stripos($tx, "/start")!==false) {
    if(joinchat($fid)=="true"){
        bot('sendMessage',[
        'chat_id' => $cid,
        'text' => "<b>🖥 Asosiy menyuga qaytdingiz</b>",
        'parse_mode'=>'html',
        'reply_markup'=>$main_menu
        ]);
        
        if(mb_stripos($stat, $fid)==false){
        $ex = explode(" ", $tx);
        if($ex[1] == $cid){
        }else{
        $olmos = file_get_contents("referal/$ex[1].txt");
        $olmoslar = $olmos + 250;
        file_put_contents("referal/$ex[1].txt", $olmoslar);
        bot('sendMessage',[
        'chat_id'=>$ex[1],
        'text'=>"📡<i>Tabriklaymiz siz botimizga do'stingizni taklif qildingiz va do'stingiz kanalimizga a'zo bo'ldi buning uchun sizga 250 uzs berildi</i>!",
        'parse_mode'=>'html'
        ]);
        }
        }

    }else{
        if(mb_stripos($stat, $fid)==false){      
        $ex = explode(" ", $tx);
        if($ex[1] == $cid){
        }else{
        bot('sendMessage',[
        'chat_id'=>$ex[1],
        'text'=>"📡<i>Tabriklaymiz siz botimizga do'stingizni taklif qildingiz! Ammo do'stingiz kanalimizga hali a'zo bo'lmadi. Do'stingiz kanalimizga a'zo bo'lsa sizga 250 uzs beriladi!</i>",
        'parse_mode'=>'html'
        ]);
        file_put_contents("referal/$fid.referal", $ex[1]);
    }
    }else{
        unlink("referal/$fid.referal");
    }
    }
}

if($data == "tekshir"){
    if(joinchat($ccid) == "true"){
        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid
        ]); 

        if($referalcid == true){
        $olmos = file_get_contents("referal/$referalcid.txt");
        $olmoslar = $olmos + 250;
        file_put_contents("referal/$referalcid.txt", $olmoslar);
         bot('sendMessage',[
        'chat_id'=>$referalcid,
        'text'=>"🔔<i>🔗 Sizda yangi taklif bor.</i> ",
        'parse_mode'=>'html'
        ]);
         unlink("referal/$ccid.referal");
     }

        bot('sendMessage',[
        'chat_id'=>$ccid,
        'text'=>"<b>🖥 Asosiy menyuga qaytdingiz</b>",
        'parse_mode'=>"html",
        'reply_markup'=>$main_menu
        ]);
    }else{
        bot("answerCallbackQuery",[
        "callback_query_id"=>$callid,
        "text"=>"⚠️ Kanallarga obuna bo'ling !",
        "show_alert"=>true,
        ]);
    }
}

if($data == "oplata"){
        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
]);
     bot('SendMessage',[
        'chat_id'=>$ccid,
        'text'=>"📋 Quyidagilardan birini tanlang:",
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>"💠 CLICK 💠",'callback_data'=>"click"],['text'=>"🔥 Paynet",'callback_data'=>"paynet"]],
]
])
]);
}




if($data == "orqa"){
        bot('editMessageText',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
        'text'=>"📋 Quyidagilardan birini tanlang:",
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>"💠 CLICK 💠",'callback_data'=>"click"],['text'=>"🔥 Paynet",'callback_data'=>"paynet"]],
]
])
]);
}


if($data == "click"){
	bot('editMessageText',[
	'chat_id'=>$ccid,
	'message_id'=>$cmid,
	'text'=>"📋 To'lov tizimi: CLICK
💡 Avto to'lov holati: OF

💳 Hamyon ( yoki karta ): Lickada
📝 Izoh: $ccid
📊 B. V. Kursi: 155

Qo'shimcha: Diqqat! izoh kiritishni unutsangiz yoki noto'g'ri kiritsangiz hisobingizga pul tushmaydi! Bu kabi holatlarda, biz bilan bog'lanishingiz mumkin.",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"☎️ Tex. Yordam",'url'=>"https://t.me/$adminuser"]],
[['text'=>"◀️Ortga",'callback_data'=>"orqa"]],
]
])
]);
}

if($data == "paynet"){
	bot('editMessageText',[
	'chat_id'=>$ccid,
	'message_id'=>$cmid,
	'text'=>"📋 To'lov tizimi: PAYNET
💡 Avto to'lov holati: OF

💳 Hamyon ( yoki karta ): Lickada
📝 Izoh: $ccid
📊 B. V. Kursi: 155

Qo'shimcha: To'lovni amalga oshirgach biz bilan bog'laning.",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"☎️ Tex. Yordam",'url'=>"https://t.me/$adminuser"]],
[['text'=>"◀️Ortga",'callback_data'=>"orqa"]],
]
])
]);
}

if($tx == "🔙Ortgqaytish" and joinchat($fid)=="true"){
    unlink("step/$fid.txt");
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"❌ <b>Bekor qilindi!</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$main_menu
    ]);
}

if($tx == "◀️Ortga" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"🖥 Asosiy menyuga qaytdingiz",
    'parse_mode'=>"html",
    'reply_markup'=>$main_menu
    ]);
}

if($tx == "◀️Orqaga" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Ortga qaytdingiz.",
    'parse_mode'=>"html",
    'reply_markup'=>$bots_menu
    ]);
}


if($tx == "🛠 Botlarni boshqarish 🛠" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"🤖 Botlarni boshqarish bo'limiga xush kelibsiz!",
    'reply_markup'=>$select_menu,
    ]);
}

if($tx=="⚙ Botlarni sozlash"){
	bot('sendMessage',[
	'chat_id'=>$cid,
	'text'=>"Tez kunda...",
	'reply_markup'=>$select_menu,
]);
}

if($tx=="➕ Yangi bot ochish"){
	bot('sendMessage',[
	'chat_id'=>$cid,
	'text'=>"📋 Quyidagilardan birini tanlang:",
	'reply_markup'=>$bots_menu,
]);
}

if($tx=="🔥 Botlar ro'yxati"){
	bot('sendMessage',[
	'chat_id'=>$cid,
	'text'=>"📋 Quyidagilardan birini tanlang:",
	'reply_markup'=>$bot_menu,
]);
}


if($tx == "⭐ Maxsus botlar"){
bot('SendMessage',[
  'chat_id'=>$cid,
  'text'=>"🎟 Buyurtmaning nomini yuboring:",
  'reply_markup'=>$rpl,ko
    ]);
    }
    if($reply=="🎟 Buyurtmaning nomini yuboring:"){
      bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"🛍 Buyurtma kelib tushdi.

🔐 Murojatchi :  <a href = 'tg://user?id=$uid'>$name</a>
🔐 Foydalanuvchi : @$user
🔐 Id raqami : <a href = 'tg://user?id=$uid'>$uid</a>
➖➖➖➖➖➖➖➖
$text

➖➖➖➖➖➖➖➖",
'parse_mode'=>'html',
]);
sleep(2);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"*🛍Buyurtmangiz qabul qilindi.

⏱24 soat ichida adminlar siz bilan aloqaga chiqishadi.*",
'parse_mode'=>"markdown",
'reply_markup'=>$bots_menu,
]);
}


if($tx == "⚡Botlar haqida"){
   bot('sendMessage',[
	'chat_id'=>$cid,
	'text'=>"📋 Quyidagilardan birini tanlang:",
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"📚 Ma'lumot",'callback_data'=>"pul"]],
]
])
]);
}

if($data == "pul"){
	bot('deleteMessage',[
	'chat_id'=>$ccid,
	'message_id'=>$cmid,
]);
   bot('sendMessage',[
	'chat_id'=>$ccid,
	'text'=>"📋 Quyidagilardan birini tanlang:",
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"🕹️Maker  Bot",'callback_data'=>"money"]],
	[['text'=>"◀️Ortga",'callback_data'=>"orqaga"]],
]
])
]);
}


if($data == "money"){
	bot('deleteMessage',[
	'chat_id'=>$ccid,
	'message_id'=>$cmid,
]);
   bot('sendMessage',[
	'chat_id'=>$ccid,
	'text'=>"📄 Bot nomi: 🕹️Maker Bot

💬 Bot tili: UZ
💵 Narxi: 10 000 uzs
🗓 Kunlik to'lov: 350 uzs

🔥 Qo'shimcha ma'lumotlar: Tez orada

🔝 Joriy versiya: v0.3",
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"◀️Ortga",'callback_data'=>"orqaga"]],
]
])
]);
}


if($tx == "📱Kabinet" and joinchat($fid)=="true"){
    $get = file_get_contents("referal/$fid.txt");
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>🗄 Kabinetingizga xush kelibsiz!</b>

<i>💵 Asosiy balansingiz:</i> <b>$get UZS</b>

<i>👥 Sizning takliflaringiz:</i> <b>$soni ta</b>",
     'parse_mode'=>"html",
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
        [['text'=>"➕ Pul kiritish",'callback_data'=>"oplata"],['text'=>"🔁 Almashish",'callback_data'=>"transfer"]],
            ]
        ])
]);
}

if($data == "transfer"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
]);

bot('SendMessage',[
'chat_id'=>$ccid,
'text'=>"✅Pul berish uchun quyidagi buyruqni bajaring!
Bir qator pastga tushib id raqamni yozing, yana bir qator pastga tushib pul miqdorini yozing!
Masalan:
<code>/almashish
$ccid
1000</code>",
'parse_mode'=>'html',
'reply_markup'=>$main_menu,
]);
}

if(mb_stripos($tx,"/almashish")!==false){
$id = explode("\n", $text);
$id1 = $id[1]; $id2 = $id[2];
$get = file_get_contents("uzs/$id1.txt");
$miqdor = $get+100;
file_put_contents("uzs/$id1.txt","$miqdor");
$get = file_get_contents("uzs/$cid.txt");
$odam = file_get_contents("uzs/$cid.dat");
if($get>=100){
$get = file_get_contents("uzs/$cid.txt");
$mm=$get-100;
file_put_contents("uzs/$cid.txt","$mm");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Hisobingizdan $id2 UZS ayirildi!</b>.",
'parse_mode'=>'html',
'reply_markup'=>$main_menu,
]);
bot('sendmessage',[
'chat_id'=>$id1,
'text'=>"<b>⚠️Yangi xabarnoma:
🎯Sizning hisobingiz to‘ldirildi!
💰Miqdor: $id2 UZS
📌Joriy balans: $get UZS
♻️Holat: Muvaffaqiyatli 

@$bot</b>.",
'parse_mode'=>'html',
'reply_markup'=>$main_menu,
]);
}else{
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Sizda do‘stingizga pul o‘tkazish uchun hisobingizda  pul yetarli emas!</b>.",
'parse_mode'=>'html',
'reply_markup'=>$main_menu,
]);
$get = file_get_contents("uzs/$id1.txt");
$miqdor = $get-100;
file_put_contents("uzs/$id1.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Hisobingizda Mablag' yetarli emas!</b>.",
'parse_mode'=>'html',
'reply_markup'=>$main_menu,
]);
}
}

if($tx == "💸 Pul ishlash"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"📋 Quyidagilardan birini tanlang:",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"🔗 Takliflar",'callback_data'=>"taklif"]],
]
])
   ]);
}

if($data == "ortga"){
    bot('deleteMessage',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid,
]);

bot('SendMessage',[
'chat_id'=>$ccid,
	'text'=>"📋 Quyidagilardan birini tanlang:",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	        [['text'=>"🔗 Takliflar",'callback_data'=>"taklif"]],
	        
]
        ])
]);
}

if($data == "taklif"){
    bot('deleteMessage',[
    'chat_id'=>$ccid,
     'message_id'=>$cmid,
]);

bot('SendMessage',[
'chat_id'=>$ccid,
	'text'=>"⚡️<b> Sizning taklif havolalaringiz:</b>

<code>https://t.me/$botname?start=$ccid

<b>Sizning takliflaringiz: $soni ta</b>",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	        [['text'=>"↗️Ulashish",'url'=>"https://t.me/share/url?url=https://t.me/$botname?start=$ccid"]],
	        [['text'=>"◀️Ortga",'callback_data'=>"ortga"]],
        ]
        ])
]);
}
if($tx  == "💸Kunlik to'lov"){
	bot('sendMessage',[
	'chat_id'=>$cid,
	'text'=>"💵 <b>To'lov qilish uchun admin bilan bog'laning.</b>

💳 <i>Qilgan to'lovingiz hech qanday komissiyasiz botdagi hisobingizga o'tkaziladi</i> 🛠",
	'parse_mode'=>'html',
	'reply_markup'=>$oplata_menu,
]);
}

if($tx == "🛒 Bot do'koni" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"📋 Quyidagilardan birini tanlang:",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>"🐤 Qiwi",'callback_data'=>"qiwi"],['text'=>"🔥 Paynet",'callback_data'=>"paynet"]],
            ]
        ])
]);
}


//<---------- Money_Bots --------------->
//<-------------------------------------->
if($tx == "🕹️Maker Bot"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 10000){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"😞 Kechirasiz, hisobingizda yetarli mablag' mavjud emas.",
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"➕ Pul kiritish",'callback_data'=>"oplata"]],
    ]
    ])
    ]);

	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"📄 Bot nomi: 🕹️Maker Bot

💬 Bot tili: UZ
💵 Narxi: 10 000 uzs
🗓 Kunlik to'lov: 350 uzs

🔥 Qo'shimcha ma'lumotlar: Tez orada

🔝 Joriy versiya: v0.3",
    'reply_markup'=>$back_menu1
    ]);
    file_put_contents("step/$fid.txt","maker&token");
    }
}

if($userstep == "maker&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"✅ Siz yuborgan bot tokeni qabul qilindi!"
        ])->result->message_id;
    $kod = file_get_contents("pullik/maker.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
    $kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/maker");
    if(file_get_contents("prouser/$fid/maker/maker.php")){
        unlink("prouser/$fid/maker/maker.php");
        unlink("prouser/$fid/maker/usid.txt");
        unlink("prouser/$fid/maker/grid.txt");
    }
    file_put_contents("prouser/$fid/maker/maker.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/ViPBuilder/prouser/$fid/maker/maker.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"ℹ️ Botingiz tayyor. Quyidagi tugma orqali botingizga o'tishingiz mumkin.
<code>/panel</code> - Ushbu buyrug' orqali botingizni sozlab olishingiz mumkin.",
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"➡️ Botga o'tish",'url'=>"https://t.me/$user"]]
    ]
    ])
    ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 3000;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"",
        'parse_mode'=>"html",

        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"",
        'parse_mode'=>"html"
        ]);
   }
}



#############################################-END-###########################

if($text=="📚 Qo'llanma"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"🤖 Bot yaratish qo'llanmasi!

1. Telegram dasturingizdan @BotFather deb qidiring va START tugmasini bosing!

2. @BotFather ga /newbot buyrug'ini yozing.

3. Yaratmoqchi bo'lgan botingiz NOMINI yozing.

4. Botingiz BOTNAMEsini yozing (botname oxiri  bot  yoki robot bilan tugashi kerak).

5. Agar amallarni to'g'ri bajargan bo'lsangiz sizga @BotFather botingiz Tokenini yuboradi uni saqlab qo'ying!

6. Bot yaratayotganingizda botimiz Token so'raganida @BotFather yuborgan tokeni yuborasiz

➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖

ESLATMA:

Agarda siz ikkita bir xil bot yaratgan bo'lsangiz avval yaratgan botingiz ish faoliyati to'xtaydi va yangi botingiz ishlashni boshlaydi!",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"💡 Yangiliklar",'url'=>"https://t.me/Edvard_I1"],['text'=>"X-NET",'url'=>"https://t.me/X_NETT"]],
]
])
]);
}

if($tx == "/help"){
	bot('SendMessage',[
	'chat_id'=>$cid,
	'text'=>"Bu Bot @Edvard_I1 tominidan yaratilgan ",
	'parse_mode'=>"html",
	'reply_markup'=>$main_menu,
]);
}

if($tx == "/settings"){
	bot('SendMessage',[
	'chat_id'=>$cid,
	'text'=>"🖥",
	'parse_mode'=>"html",
	'reply_markup'=>$main_menu,
]);
}


if($text == "📨 Bog‘lanish"){
  bot('sendMessage',[
  'chat_id'=>$cid,
  'message_id'=>$mid,
  'text'=>"Xabaringizni kiriting!",
  'reply_markup'=>$rpl,
    ]);
    }
    if($reply=="Xabaringizni kiriting!"){
      bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"🔏 Murojat kelib tushdi.

🔐 Murojatchi :  <a href = 'tg://user?id=$uid'>$name</a>
🔐 Foydalanuvchi : @$user
🔐 Id raqami : <a href = 'tg://user?id=$uid'>$uid</a>
➖➖➖➖➖➖➖➖
$text

➖➖➖➖➖➖➖➖",
'parse_mode'=>'html',
]);
sleep(2);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"_📚 Murojatingiz adminga yuborildi. Noto'g'ri shikoyat uchun ban olishingiz mumkin 🔐_
*• 12 soat ichida javobni olasiz √*",
'parse_mode'=>"markdown",
'reply_markup'=>$main_menu,
]);
}

//<------- admin-------> 

if(($tx == "/panel" or $tx == "⬅️ Admin panel") and $cid == $admin){
    bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$mid]);
    bot('sendMessage',[
    'chat_id'=>$admin,
    'text'=>"👨‍💻Admin panelga xush kelibsiz:",
    'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
    [['text'=>"💸 Pul berish"],['text'=>"💸 Pul ayirish"]],
    [['text'=>"📊 Statistika"]], 
    [['text'=>"❌Botni o‘chirish"],['text'=>"✅Botni yoqish"]],
    [['text'=>"◀️Ortga"]]
    ]
    ])
    ]);
}

if($tx == "⬅️ Bekor"){
    unlink("step/admin.txt");
    bot('sendMessage',[
        'text'=>"<b>Bekor qilindi!</b>nQuyidagi menyudan foydalaning: ",
        'chat_id'=>$admin,
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
    [['text'=>"💸 Pul berish"],['text'=>"💸 Pul ayirish"]],
    [['text'=>"📊 Statistika"]], 
    [['text'=>"❌Botni o‘chirish"],['text'=>"✅Botni yoqish"]],
    [['text'=>"◀️Ortga"]]
    ]
    ])
    ]);
}




if(mb_stripos($tx, "💸 Pul berish")!==false){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>✅Pul berish uchun quyidagi buyruqni bajaring!
Bir qator pastga tushib id raqamni yozing, yana bir qator pastga tushib olmosni yozing!
Masalan:
/plus
$admin
1000</b>",
'parse_mode' => 'html',
'reply_markup'=>$keys,
]);
}elseif(mb_stripos($tx, "/plus")!==false){
if($cid == $admin){
$id = explode("\n", $tx);
$id1 = $id[1]; $id2 = $id[2];
$olmos = file_get_contents("referal/$id1.txt");
$miqdor = $olmos+$id2;
file_put_contents("referal/$id1.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>🛠 Hisobi to'ldirildi.
🆔 Id raqami : $id1
💳 To'ldirildi : $id2 UZS</b>",
'parse_mode' => 'html',
'reply_markup'=>$menu,
]);
bot("sendmessage",[
'chat_id'=>$id1,
'text'=> "*🛠 Hisobingiz $id2 UZS ga to'ldirildi.*",
'parse_mode'=>'Markdown',
]);
}else{
 bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "<b>Bu bo‘limni faqat bot administratori ishlata oladi!</b>",
'parse_mode'=>'Markdown',
]);
}
}

if(mb_stripos($tx, "💸 Pul ayirish")!==false){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>✅Pul ayirish uchun quyidagi buyruqni bajaring!
Bir qator pastga tushib id raqamni yozing, yana bir qator pastga tushib olmosni yozing!
Masalan:
/minus
$admin
1000</b>",
'parse_mode' => 'html',
'reply_markup'=>$keys,
]);
}elseif(mb_stripos($tx, "/minus")!==false){
if($cid == $admin){
$id = explode("n", $tx);
$id1 = $id[1]; $id2 = $id[2];
$olmos = file_get_contents("referal/$id1.txt");
$miqdor = $olmos - $id2;
file_put_contents("referal/$id1.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>🛠 Hisobdan yechib olindi.
🆔 Id raqami : $id1
💳 Yechildi : $id2 UZS</b>",
'parse_mode' => 'html',
'reply_markup'=>$menu,
]);
bot("sendmessage",[
'chat_id'=>$id1,
'text'=> "*🛠 Hisobingizdan $id2 UZS ayirdi.*",
'parse_mode'=>'Markdown',
]);
}else{
 bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "<b>Bu bo‘limni faqat bot administratori ishlata oladi!</b>",
'parse_mode'=>'Markdown',
]);
}
}


if($tx == "📂 Skript" and $cid == $admin){
    bot('sendDocument',[
    'chat_id'=>$admin,
    'document'=>new CURLFile(__FILE__),
    'caption'=>"$botname kodi",
    'reply_markup'=>json_encode([
        'resize_keyboard'=>true,
        'keyboard'=>[
        [['text'=>"⬅️ Admin panel"]],
        ]
        ])
    ]);
}

if($tx == "📊 Statistika" and joinchat($fid)=="true"){
    $us = file_get_contents("stat/usid.txt");
    $uscount = substr_count($us, "\n");
    $bot = file_get_contents("stat/stat.txt");
    $pullik = file_get_contents("stat/statpro.txt");
    $all = $bot + $pullik;
    bot('sendMessage',[
    'chat_id' => $cid,
    'text'=>"📊 Statistika
👤Bot a'zolari soni: *$uscount* ta 
🤖Jami yasalgan botlar: *$pullik* ta",
    'parse_mode'=>"markdown",
    'reply_markup'=>$main_menu, 
    ]);
}


?>