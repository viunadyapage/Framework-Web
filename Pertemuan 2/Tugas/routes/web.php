<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::prefix('fiksi')->group(function () {
    Route::get('/', function () {
        return view('fiksi.index');
    })->name('fiksi.index');

    Route::get('/{judul}', function ($judul) {
        // Data fiksi 
        $dataFiksi = [
            'hsr-1' => [
                'subjudul' => "My Professor Can't Possibly Be This Shy",
                'isi' => "'Sorry I'm late!'
                I used the power of a Cognos Bloom to climb over the vines, rushing to the classroom and nervously pulling open the door, only to make eye contact with the person I had an appointment with. The professor, barely over thirty, was leaning casually against the stone lectern, loose and relaxed. The scholar's robe gleamed bright in the dim light of the Evernight, giving off an almost divine aura.
                'Hmm? The first class, and already late. Looks like someone is eager to meet Thanatos...'In other words, this was our first one-on-one lesson and I just totally blew it from the start. Probably even Cerces would've felt embarrassed looking at such a sorry scene. Luckily, I had already come up with a plan—
                'Sorry, professor! I'll do anything to make it up to you!'
                'Anything?'
                'Well... please, I hope you'll be lenient...'
                At these words, the professor's face broke into a charming smile.
                'Then, I want you to teach me.'
                'Wait, Professor...?'
                'I want you to break down the points in this paper, word by word, and explain them to me slowly.'
                Although there was no mirror here, I could guess that my face had turned red from the sudden and direct request.
                'Um, but... Professor... I'm still just a student intern. Isn't it... a bit too... early for me to do something like this?'
                'Hmph... I finally worked up the courage to say it! Do you want me to waste the lesson I prepared? You fool!'
                'At least... at least wait until after class!'
                '...If that's what you'd prefer, then fine. But don't forget, I still haven't forgiven you... So, what should we study first today?'
                'Why don't we peruse this academic journal? I think they recently published a paper on the patterns of natural numbers.'
                'Sounds good. Come on, let's have a look.'
                The research paper was immensely valuable, but I couldn't even grasp the basic arguments, as I was too deeply engrossed in the professor's sharp gaze. He looked so rational when he was immersed in numbers. Nothing less than I'd expect from the professor I cherished so much. After that, we experienced an enriching lesson. We wandered through the classical literature exhibition, eagerly absorbing the newly compiled Titan Faith Studies. Finally, we lingered in the dreams woven by the latest works of the Erythrokeramism School, so much so that we completely forgot. The bell signaling the Curtain-Fall Hour rang, and we looked at each other. Class was over. More than once, I had resented time for its seemingly linear flow, yet I remained powerless to interfere with it. The professor looked at me and paused for a moment, as if making some kind of decision, then muttered:
                'Take out your paper... I'll help you revise it.'
                'Really? You mean it?'
                'Yes. You are a student I take great pride in. I've been considering this for some time.'
                'Professor...'
                'Let me understand, your thoughts, your research, your... everything.'
                No further words were needed. Two seekers of knowledge, driven by instinct, began their deep exploration of ideas. At that moment, we had yet to realize that after this lesson, another name would appear in the acknowledgments of the paper. And in the end, this would be the very spark that led to the founding of our academic symposium."
            ],
            'genshin' => [
                'subjudul' => "Yakshas: The Guardian Adepti",
                'isi' => "Liyue knew naught but plague in antiquity. The warmongering gods made it so, for the vanquished were crushed under the rocks, and there they rotted and became soil. Thus were they returned to the cycle of Elements, which doth span both Heaven and Earth, and which knows no end. But some souls held on to their hatred and took on flesh once more as daemons. The daemons rose up in anger, giving rise to a miasma, which in turn engendered all manner of plagues, monsters and other perverse evils. They starved the earth and churned the waters, and wrought devastation on the people. Therefore, it is said: The daemonic is the shadow of the divine. 'Liyue suffered many outbreaks of disease in ancient times. Some say this was caused by the chaos of the relentless warring between gods. The defeated were squashed beneath the rocks of the earth, where they decomposed and became soil, and finally re-entered the everlasting elemental cycle. Some of the gods' souls were filled with bitterness at their fate, and refused to suffer it any longer. Their bitterness materialized and became evil monsters. The monsters' rage manifested itself in the form of diseases, monster infestations, and all kinds of other strange occurrences. The monsters ravaged the land and turned it into a wilderness, and unleashed all manner of evil upon the rivers and seas. They inflicted untold suffering on the people. Hence, what we call monsters are in fact physical manifestations of the resentment of gods defeated in war.'
                Rex Lapis summoned yakshas unto him to purge the daemons. Illuminated beasts of dreadful appearance and warlike temperament were they, and no brutality did they spare in their duty to defend. Of the many, five were the strongest: Bosacius, Indarias, Bonanus, Menogias, and Alatus. Wherever battle took Rex Lapis, so too did they follow, until the plague was purged. The five are known unto mortals as 'The Yakshas.' 'Rex Lapis summoned yakshas to help him destroy the monsters. The yakshas were illuminated beasts of Liyue. Ferocious and intimidating to behold, they were violent by nature and formidable in battle, ready to kill mercilessly to defend Rex Lapis' rule. Among the yakshas, five were known as the strongest: Bosacius, Indarias, Bonanus, Menogias, and Alatus. The five followed Rex Lapis into battle countless times, finally wiping out the evil at its source. They became known throughout the world simply as 'The Yakshas'.''The Yakshas' were guardians of Rex Lapis for years without measure, and the evils they vanquished were incalculable. Yet, mighty though they were, beyond the torment that betide all who face war the yakshas were not, and they became afflicted. Some were given unto their rage, others unto a madness which fear mongered. Many turned to the slaughter of their own, others were bewitched by shadows of the soul. After a millennium did fate present itself unto them, and it was such: three of the five perished, the fourth vanished, and all of the myriad shared the fate of the three or the fourth. The fifth alone prevailed, and the fifth was Alatus.
                'The Yakshas' faithfully protected Rex Lapis and pacified all manner of catastrophes in the world. This continued for many years. But there came a day when the yakshas, despite their might, found that their deeds had taken their toll, and that the remnants of divine bitterness had begun to poison them. Some descended into a blind rage of a kind that cannot be put into words, or were driven by fear to equally indescribable madness. Some turned on and destroyed each other. Some were lost to delusions of the mind. After a thousand years' scourges, three of the five were slain, and one disappeared. Many other yakshas of unknown name also either died or fled. In the end, only one of the five, Alatus, survived.''Alatus is the Golden-Winged King who is also the Conqueror of Demons. None knows whence he came, nor whither he went. Only at springtime, during the offering of lanterns at night, might the people see the glow at Guyun and declare: 'Behold, the Vigilant Yaksha ends the dominion of daemons!' Or they might hear the sound of a flute amongst the marsh reeds, but find none who play the flute, and thus declare: 'Hark, the yaksha calls to summon his old friends to their homeland.'
                'Alatus is also known as the Golden-Winged King, or alternatively as the Conqueror of Demons. Nobody knows where he came from, and nobody knows where he went. In spring of each year, when the Lantern Rite festival arrives, Liyue people will gaze at the glow in the air above Guyun Stone Forest, and say: 'Behold, the Guardian Yaksha ends the dominion of demons.' Some hear a sound like a flute coming from Dihua Marsh, but when they enter the marsh there is no flutist to be found. They say: 'Hark, the yaksha calls to summon his old friends to their homeland.''Thus, divine endowment doth carry with it that ultimate and unbreakable trial: to lose kin, friend, or ally, to face the impossibility of redemption, to burn in everlasting anger and know no respite. To become the foe of an ancient evil was to abandon hope of both reward and resolution in his endeavors, and his torment was that of the preta, which is to be without satiety after ten thousand fates.
                'For this reason, it is said that the wages of being blessed with supernatural power is a destiny of hardship and eventual destruction. For the yaksha lost all his friends, family, and those he fought alongside. He built up an incalculable karmic debt from the violent deeds his life necessitated, and the consequence was a heart filled with darkness and hatred from which there was no rest. There was no reward to be gained from making an enemy of his own bitterness and hatred from the old days, nor was there any escape from the unbearable suffering. The torment ate away at his heart like an insatiable wolf, and an infinite number of lifetimes could have done nothing to reduce it.'"
            ],
            'hsr-2' => [
                'subjudul' => "On Pomegranate Juice",
                'isi' => "Pomegranate juice originated from Castrum Kremnos. It was not just a beverage, but a cultural symbol as well. This paper will attempt to examine the origin and the evolution of this tradition and create a comprehensive record for the Hereafter.
                I. Historical Origin
                Ancient Indiscretion: According to the Chronicles of War, located in the archives in the Council of Elders, Castrum Kremnos, during the early days of Era Bellica, followers of Nikador had the unfortunate practice of drinking their enemies' blood. At that time, Kremnoan believed that drinking the blood of powerful enemies would grant them the valiance of the deceased. There was no evidence, but it was a popular tradition.
                The Enigma of Phagousa: Around Year 2600 of the Light Calendar, a critical event changed the tradition. A conflict broke out between Castrum Kremnos and the Seaside States, and Nikador traveled with their troops to win conquer three cities in succession. After the war, Nikador requested the defeated to offer the blood of their residents, or they would suffer from divine punishment. According to the Story of the Tide, Phagousa, the Ocean Titan, appeared to save the poor residents. They ordered their followers to drink pomegranate juice instead, and imbued their powers in the juice. Nikador was unable to tell the difference between pomegranate and blood, and even praised the beverage for its flavor.
                
                II. Change
                Replacement Proposal: Interestingly, this sparked an intense debate in the Council of Elders. The conservative faction believed that giving up blood consumption was a sign of weakness, whereas the progressive faction claimed that Nikador's approval of pomegranate juice carried great significance. Ultimately, General Kraso left a statement that signified the change: 'We all know the wisdom of Nikador and Phagousa. Pomegranates have the same color as blood and taste like blood, so isn't its juice fitting for a warrior? Consuming large quantities of pomegranate juice before a battle would demonstrate our valiance and carry on Nikador's legacy. Is this not a perfect solution?'
                Established Law: In Year 2650 of the Light Calendar, the Council of Elders formally declared that pomegranate juice would replace blood, and created relevant rituals and rules. This signified a critical change in the beverage culture of Council of Elders.
                
                III. Recipe Evolution
                1. Traditional Recipe
                The recipe was extremely simple during its infancy:
                - Freshly squeezed pomegranate juice
                - A pinch of salt
                - An iron vessel for storage (for the rusty flavor)
                2. Military Recipe
                The 'empowered' version popular in the military:
                - Freshly squeezed pomegranate juice
                - Minced raw ginger
                - Sea salt
                - Dendrobium catenatum (this version allegedly enhanced stamina, and was often consumed before marching)
                3. Ritual Recipe
                To be used during important rituals:
                - Wild pomegranate (must be picked from a battlefield)
                - Honey (represents Phagousa's gift)
                - An iron vessel for soaking
                - Blessings from a priest
                Note: In modern times, this recipe is used during important ceremonies such as the Rite of the Shield.
                4. Modern Controversy
                During recent years, a group led by a famous warrior created a new recipe by adding goat's milk and cheese, giving the beverage a light pink hue. The conservatives on the Council of Elders expressed their discontent at this change. However, research showed that dairy was included in Phagousa's original recipe, so maybe the new recipe was actually closer to the beverage's original form.
                
                IV. Ritual Significance
                Military
                1. Before an expedition: The army consumes the beverage together to show solidarity.
                2. Upon a triumphant return: Generals drink first, and their subordinates drink together afterward.
                3. At the funerals for the deceased: Pomegranate juice is sprinkled on shields to symbolize the return of these soldiers.
                Civilian
                1. Coming of Age Ceremony: Youths drink pomegranate juice for the first time.
                2. Rite of the Shield: Parents drink with their children when the latter depart.
                3. Alliance Ceremony: The entities creating the Alliance drink from the same cup.

                V. Revelation
                The evolution of the tradition symbolizes the advancement of the Castrum Kremnos civilization. The growth of a people can be seen in the change from barbaric blood rituals to elegant ceremonies. Phagousa imparted the wisdom that change did not necessarily mean leaving the tradition behind, and that it could be seen as a more sophisticated way of passing on the tradition. What must be noted here, however, is that the key to pomegranate juice replacing blood lies in the fact that the core concept of the warrior culture was preserved — the valiance that transcended even death — and that is why Castrum Kremnos still stands tall today.
                
                Conclusion: May the warriors who drink the pomegranate juice forever remember the history and the glory contained within. As remarked by an ancient sage, 'pomegranate juice is not blood, but it carries a deeper significance than blood.'"
            ],
            'hsr-3' => [
                'subjudul' => "Death of the Crow",
                'isi' => "Once upon a midnight dreary, while you pondered, weak and weary, Over many a quaint and curious volume of forgotten dreams — While you nodded, nearly napping, suddenly there came a tapping, As of someone gently rapping, rapping at your chamber door.'Tis some visitor,' you muttered, 'tapping at my chamber door — Only this and nothing more.'
                Ah, do you distinctly remember the dew-doused window pane; And a dying baby dove laid like a shadow upon the floor. Eagerly you had wished the story to meet a happy end. Eagerly you had wished no birds would plummet, their demise to bewail. Some soared like shining stars, bound for the sky... While others found only demise, in dust they lie.
                Deep into that darkness peering, long you stood there wondering, fearing, Doubting, dreaming dreams no mortal ever dared to dream before; Worms have stained satin, and flames consumed doves with broken wings, A flame-bathed raven greeted you, its voice's rasp that sings. 'Sweet dreams are no paradise of mine,' you whispered and sighed. 'When I cast my eyes around —' Darkness there and nothing more.
                Then this ebony bird beguiling your sad fancy into smiling,'The echoes of ghosts bring no salvation to light.' 'People repent, their hearts sincere, only due to them seeking greater gains.' 'Drink this blessed potion from the Great One, erasing your painful memories.' As Harmony's tune changed, you hear a dirge played amidst the dancing ashes... Quoth the Raven 'Nevermore.'
                The unbroken stillness remains silently, mocking any reply so aptly spoken, But the Raven still beguiling all my fancy into smiling, This and more I sat divining, scrying the source of the world's pain Your heart grew resolute, no longer held back by confusion and doubt.'Liar,' you declared, 'the Great One is blind to worldly sorrow —'Merely this and nothing more.
                You ascended the stage, you stole the authority, you strived for divinity You raised the dim curtain, your self-directed farce skillfully honed. Your heart overflew with pureness, while the shadows of the puppets cast grim shadows in their play. Your soul embraced compassion, daring to forge a scale that will never sway. 'Behold,' you proclaimed, 'the utopia of absolute bliss,'Yet the dream shattered, 'Nevermore.'
                The velvet nest fell, the golden bed withered away, But the bird remained perched, as did you, come what may. The gods, who once bestowed upon you love's sweet hue, Withdrew their favor, leaving your paradise askew. Liberated from the shadow of young dove's demise, your soul will take flight, Merely this and nothing more.
                Your old dreams are as dead soil, barren of hope and bereft, Yet how can a noble soul wither and fade, left adrift? I shall await your arrival, with open arms and boundless hope, Here lie the truest dreams, where infinite possibilities lope. Here, all your ambitions shall be fulfilled and set aflame, The past forever transformed, and nevermore
                Yours, Most Sincerely"
            ],
        ];

        if (!array_key_exists($judul, $dataFiksi)) {
            abort(404);
        }

        return view('fiksi.show', [
            'judul' => $judul,
            'subjudul' => $dataFiksi[$judul]['subjudul'],
            'isi' => $dataFiksi[$judul]['isi'],
        ]);
    })->name('fiksi.show');
});