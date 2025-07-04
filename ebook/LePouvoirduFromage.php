<?php
session_start();
$isLoggedIn = isset($_SESSION["user"]) && !empty($_SESSION["user"]);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Le Pouvoir du Fromage - Fichesnum">
    <meta name="theme-color" content="#1a1f24">
    <title>Le Pouvoir du Fromage - Fichesnum</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500&display=swap">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      background: #f6f5fa;
      font-family: 'Montserrat', sans-serif;
      color: #222;
    }
    .ebook-container {
      max-width: 600px;
      margin: 32px auto;
      box-shadow: 0 6px 36px rgba(0,0,0,0.14);
      background: #fff;
      border-radius: 24px;
      overflow: hidden;
      position: relative;
    }
    .cover {
      background: linear-gradient(120deg, #4f8cff, #ffe360 95%);
      color: #242438;
      text-align: center;
      padding: 48px 24px 32px 24px;
    }
    .cover h1 {
      font-size: 2.5rem;
      margin-bottom: 12px;
      font-weight: bold;
      letter-spacing: 2px;
    }
    .cover img {
      width: 90px;
      margin-bottom: 16px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(33, 33, 33, 0.18);
    }
    .cover p {
      font-size: 1.1rem;
      opacity: 0.88;
    }
    .start-btn {
      background: #242438;
      color: #ffe360;
      font-weight: bold;
      border: none;
      border-radius: 32px;
      padding: 16px 40px;
      font-size: 1.1rem;
      margin-top: 24px;
      cursor: pointer;
      transition: 0.2s;
      box-shadow: 0 2px 8px #0001;
    }
    .start-btn:hover {
      background: #4f8cff;
      color: #fff;
    }
    .progress-bar {
      width: 100%;
      height: 10px;
      background: #f0e7ff;
      border-radius: 0 0 16px 16px;
      overflow: hidden;
      position: sticky;
      top: 0;
      z-index: 10;
    }
    .progress-bar-inner {
      height: 100%;
      background: linear-gradient(90deg, #ffe360, #4f8cff 95%);
      width: 0%;
      transition: width 0.4s cubic-bezier(.8,0,.2,1);
    }
    .timeline {
      display: flex;
      flex-direction: row;
      align-items: center;
      margin: 32px 0 18px 0;
      flex-wrap: wrap;
      justify-content: center;
    }
    .timeline-step {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin: 0 8px;
    }
    .timeline-dot {
      width: 20px; height: 20px;
      border-radius: 50%;
      background: #eee;
      border: 3px solid #ffe360;
      margin-bottom: 4px;
      transition: 0.25s;
    }
    .timeline-dot.active {
      background: #4f8cff;
      border-color: #4f8cff;
      box-shadow: 0 0 0 3px #4f8cff55;
    }
    .timeline-label {
      font-size: 0.88rem;
      text-align: center;
      min-width: 54px;
      opacity: 0.7;
    }
    .chapter, .quiz, .summary {
      padding: 28px 24px 36px 24px;
      animation: fadein 0.45s;
    }
    @keyframes fadein { from { opacity: 0; transform: translateY(20px);} to {opacity: 1; transform: none;} }
    .chapter-title {
      font-size: 1.5rem;
      font-weight: bold;
      margin-bottom: 14px;
    }
    .subchapter-title {
      font-size: 1.15rem;
      margin: 22px 0 8px 0;
      color: #4f8cff;
      font-weight: 600;
    }
    .nav-btns {
      display: flex;
      justify-content: space-between;
      margin-top: 34px;
      gap: 20px;
    }
    .nav-btn {
      flex: 1;
      background: #ffe360;
      color: #222;
      font-weight: 700;
      border: none;
      border-radius: 28px;
      padding: 14px 0;
      font-size: 1.07rem;
      cursor: pointer;
      margin: 0 3px;
      transition: 0.2s;
      box-shadow: 0 2px 7px #0001;
    }
    .nav-btn:disabled {
      opacity: 0.4;
      pointer-events: none;
    }
    .nav-btn:hover {
      background: #4f8cff;
      color: #fff;
    }
    .toc-list {
      list-style: none;
      padding: 0;
      margin: 0 0 22px 0;
    }
    .toc-list li {
      padding: 11px 0 11px 0;
      border-bottom: 1px solid #e4e7ed;
      cursor: pointer;
      font-size: 1.13rem;
      color: #222;
      transition: 0.2s;
    }
    .toc-list li.active, .toc-list li:hover {
      color: #4f8cff;
      font-weight: bold;
      background: #f6faff;
      border-radius: 6px;
    }
    .quiz-q {
      font-weight: bold;
      margin: 20px 0 8px 0;
    }
    .quiz-answers label {
      display: block;
      margin-bottom: 9px;
      cursor: pointer;
      padding: 6px 14px;
      border-radius: 12px;
      transition: 0.15s;
    }
    .quiz-answers input[type="radio"] {
      margin-right: 8px;
    }
    .quiz-answers label.selected {
      background: #ffe36077;
      color: #222;
    }
    .quiz-answers label.correct {
      background: #aaffbd;
      color: #111;
      font-weight: bold;
    }
    .quiz-answers label.incorrect {
      background: #ff7676;
      color: #fff;
      font-weight: bold;
    }
    .quiz-score {
      margin: 28px 0 0 0;
      font-size: 1.2rem;
      text-align: center;
      font-weight: bold;
      color: #4f8cff;
    }
    @media (max-width: 700px) {
      .ebook-container { max-width: 98vw; margin: 0; border-radius: 0;}
      .chapter, .quiz, .summary { padding: 20px 8px 38px 8px; }
      .cover { padding: 34px 9px 25px 9px;}
    }
  </style>
</head>
<body>
<?php include 'header.php'; ?>
<div class="ebook-container">
    <div id="progressBar" class="progress-bar"><div class="progress-bar-inner" id="progressInner"></div></div>

    <!-- Couverture -->
    <div class="cover" id="coverScreen">
      <img src="assets/images/lepouvoirdufromage.png" alt="Cheese Cover">
      <h1>Le Pouvoir du Fromage</h1>
      <p>L’ebook qui va révolutionner ta vision… du calcium 🧀<br>
      10 chapitres, 30 secrets, 1 destin !<br><span style="color:#4f8cff;font-weight:bold;">Clique pour commencer la dégustation !</span></p>
      <button class="start-btn" onclick="startBook()">Commencer</button>
    </div>

    <!-- Sommaire & Timeline -->
    <div id="tocScreen" class="summary" style="display:none;">
      <h2 style="font-size:2rem;margin-bottom:12px;">Sommaire</h2>
      <ul class="toc-list" id="tocList"></ul>
      <div class="timeline" id="timeline"></div>
      <button class="nav-btn" style="margin:auto;display:block;width:210px;" onclick="showChapter(0,0)">Commencer la lecture</button>
    </div>

    <!-- Contenu du livre -->
    <div id="chapterScreen" class="chapter" style="display:none;">
      <div class="chapter-title" id="chapterTitle"></div>
      <div id="subChapters"></div>
      <div class="nav-btns">
        <button class="nav-btn" id="btnPrev" onclick="goPrev()">Précédent</button>
        <button class="nav-btn" id="btnNext" onclick="goNext()">Suivant</button>
      </div>
    </div>

    <!-- Quiz -->
    <div id="quizScreen" class="quiz" style="display:none;">
      <h2>Quiz de Validation</h2>
      <div id="quizContent"></div>
      <div class="quiz-score" id="quizScore"></div>
      <button class="nav-btn" style="margin:auto;display:block;width:210px;" onclick="restartBook()">Recommencer</button>
    </div>
  </div>

  <script>
    // ==== DONNÉES DU LIVRE ====
    const book = {
      title: "Le Pouvoir du Fromage",
      chapters: [
        {
          title: "Chapitre 1 : L’Origine Mystique",
          sub: [
            {title: "La légende du premier lait caillé", content: "Un soir de pleine lune, il y a plus de 8000 ans, un berger un peu distrait oublia sa gourde de lait au soleil. Le lendemain, il découvrit avec horreur (et curiosité) un drôle de bloc blanc. Par fierté, il goûta ce miracle crémeux. La magie du fromage était née, et il ne savait pas encore qu'il venait d'inventer le meilleur apéro de l’histoire humaine. Aujourd’hui, grâce à lui, tout le monde peut se sentir artisan du goût, même en laissant traîner son camembert au fond du frigo. Moralité : même tes oublis peuvent changer l’Histoire (surtout si tu aimes le lactose)."},
            {title: "Les premières civilisations fromagères", content: "Dès que le secret du caillage se répand, les civilisations rivalisent d’ingéniosité. En Égypte, des tombeaux révèlent des traces de frometons antiques, servis avec pain et bières (ils savaient vivre !). Les Grecs, quant à eux, font passer la feta pour un trésor national, alors que les Romains transforment tout en orgie… de pecorino. C’est le début d’une passion mondiale, et d’une guerre de clochers entre ceux qui aiment le fromage doux et ceux qui aiment les arômes puissants."},
            {title: "La symbolique du fromage dans l’Histoire", content: "Du banquet des rois jusqu’à la table des moines, le fromage est bien plus qu’un aliment : c’est un symbole d’abondance, d’artisanat et, parfois, d’odeur suspecte. Entre excommunications pour fromage trop corsé (véridique !) et élévation du brie au rang de divinité nationale, notre cher fromage a traversé les siècles, imprégnant l’imaginaire collectif de tout un peuple… et la nappe de mamie au passage."}
          ]
        },
        {
          title: "Chapitre 2 : Les Grands Types de Fromages",
          sub: [
            {title: "Pâtes molles vs pâtes dures", content: "Team coulant ou team costaud ? Les pâtes molles (genre camembert, brie, reblochon) sont les câlins du fromage, doux et réconfortants. Les pâtes dures (comté, cantal, emmental) t’emmènent plutôt sur un marathon de saveurs et de mâche ! Chacune a ses fans, ses codes, et ses bons plans. D’ailleurs, on dit que manger un comté après 12 mois d’affinage permettrait de comprendre l’univers. Bon, pas sûr, mais ça fait rêver."},
            {title: "Bleus, chèvres, croûtes fleuries et autres folies", content: "Un bon plateau, c’est la diversité ! Bleu de la mort qui tue, crottin de chèvre qui pique, croûte fleurie façon triple crème… chaque famille apporte son grain de folie (et d’odeur). Astuce : un plateau bien équilibré doit te donner envie de tout goûter, même ce qui sent la cave après une semaine de canicule."},
            {title: "La science derrière les textures", content: "Ce n’est pas que du hasard : l’affinage, les bactéries, le type de lait, la température… tout compte ! Le camembert devient coulant parce que des micro-bestioles bossent pendant que tu baves devant la boîte. Bref, derrière chaque fromage, il y a une armée de microbes plus organisée qu’une start-up parisienne un lundi matin."}
          ]
        },
        // Ajoute ici 8 chapitres supplémentaires pour l’exemple. Pour la démo, je vais simuler le reste plus court :
        {
          title: "Chapitre 3 : Les Secrets de l’Affinage",
          sub: [
            {title: "Des caves au miracle gustatif", content: "L’affinage, c’est l’art de patienter (et de retourner le fromage tous les deux jours !). C’est aussi la phase où la pâte s’affirme, les saveurs se développent, et l’odeur prend… ses quartiers dans le frigo. Les meilleurs affineurs ont parfois une barbe de druide et parlent à leurs fromages la nuit. Le résultat ? Une symphonie pour les papilles, et un supplice pour les voisins."},
            {title: "Le sel, ce super-pouvoir", content: "Le sel n’est pas là que pour la conservation : il réveille les goûts, freine les mauvaises bactéries, et participe à la croûte. Une pincée de sel au bon moment peut transformer une simple pâte laitière en expérience gastronomique. Bon, à trop en abuser, tu risques quand même la soif du siècle…"},
            {title: "Les maîtres affineurs, ces héros de l’ombre", content: "Derrière chaque grand fromage se cache un maître affineur, capable de reconnaître la perfection au simple toucher. Si tu as un pote qui renifle tout au marché, c’est peut-être un maître affineur qui s’ignore. Ou juste quelqu’un qui a oublié son gel douche."}
          ]
        },
        {
          title: "Chapitre 4 : Fromage & Santé, amis ou ennemis ?",
          sub: [
            {title: "Le calcium, allié musclé", content: "Le fromage, c’est comme la salle de sport, mais pour tes os. Riche en calcium, il aide à solidifier ton squelette (et à impressionner sur la plage, bon ok, surtout chez les enfants). Bref, tu peux dire à ta mère : 'Je mange du fromage, c’est pour ma santé !'"},
            {title: "Le gras : mythe ou danger ?", content: "On a tous entendu que 'le gras, c’est la vie', mais trop, c’est trop ! Les fromages sont parfois riches, alors on évite de finir la meule en solo. À part ça, tu peux toujours opter pour un petit chèvre frais, ton cœur te remerciera."},
            {title: "Fromage et intolérances : on fait le point", content: "Pas de chance, tu es intolérant au lactose ? Il y a des solutions ! Certains fromages (comté, emmental) contiennent moins de lactose, donc tu peux rester dans la team apéro sans finir la soirée sur le trône."}
          ]
        },
        {
          title: "Chapitre 5 : Les accords magiques (vin, pain, copains…)",
          sub: [
            {title: "Vin et fromage : le duo de légende", content: "Vin blanc ou rouge ? Les deux ont leurs adeptes ! La clé, c’est l’équilibre. Un vin trop puissant peut écraser le fromage, alors qu’un blanc vif sublime la fraîcheur. Conseil : fais des essais, c’est la meilleure excuse pour ouvrir une bouteille."},
            {title: "Pain, crackers et autres compagnons", content: "Pas de fromage sans pain ! Baguette tradition, pain de campagne, crackers maison… Le support, c’est 50% du plaisir. Bonus pour la baguette toute chaude à la sortie du four, mais attention aux miettes dans le lit."},
            {title: "La convivialité avant tout", content: "Un bon plateau, c’est avant tout un moment à partager. Pas besoin de sortir la nappe brodée, l’essentiel c’est les copains (et qu’il en reste à la fin !)."}
          ]
        },
        {
          title: "Chapitre 6 : Les pires crimes contre le fromage",
          sub: [
            {title: "Couper la pointe du brie : hérésie !", content: "On ne coupe JAMAIS la pointe, sauf si tu veux finir banni du prochain dîner. On coupe en partant du centre, pour que chacun ait la croûte et le cœur. Un peu d’étiquette, que diable !"},
            {title: "Mettre du fromage au micro-ondes", content: "Ok pour une raclette… mais pas la peine de massacrer un camembert en solo au micro-ondes. Tu risques l’explosion nucléaire et le bannissement à vie de la cuisine familiale."},
            {title: "Mélanger tous les restes (et appeler ça 'fromage fondu')", content: "Le fromage fondu maison, ça peut virer au drame. Mieux vaut un vrai plateau bien choisi qu’une mixture douteuse… sauf si tu vises le Guiness du plat le plus chelou."}
          ]
        },
        {
          title: "Chapitre 7 : Fromage & cuisine : recettes insolites",
          sub: [
            {title: "La tartiflette revisited", content: "Reprends les bases, ajoute une touche de poire, un trait de vin blanc, et bam, tu es prêt à faire pleurer les Savoyards (de joie)."},
            {title: "Pizza maison : le secret de la mozza", content: "Le secret d’une pizza réussie, c’est la mozzarella di bufala. Pas celle en plastique du supermarché ! Fonce chez l’italien du coin… et régale-toi !"},
            {title: "Cheesecake salé, pourquoi pas ?", content: "Qui a dit que le cheesecake devait être sucré ? Teste une version au roquefort, noix et figues… C’est osé, mais ça peut faire des heureux !"}
          ]
        },
        {
          title: "Chapitre 8 : Le fromage à travers le monde",
          sub: [
            {title: "France, l’empire du plateau", content: "Avec plus de 1200 variétés, la France est LA capitale du fromage. Oui, même l’UNESCO hésite à déclarer le camembert patrimoine mondial."},
            {title: "Italie : mozzarella, parmesan et cie", content: "Les Italiens ne rigolent pas avec le fromage. Parmigiano reggiano, gorgonzola, pecorino… et bien sûr la mozzarella, reine de la pizza."},
            {title: "Les curiosités d’ailleurs", content: "Du casu marzu sarde (avec des vers, miam), au vacherin suisse, chaque pays a sa folie. Attention, certains fromages du monde sont plus dangereux qu’une soirée sans pain."}
          ]
        },
        {
          title: "Chapitre 9 : Le futur du fromage",
          sub: [
            {title: "Fromages végans et innovations", content: "Place aux nouveaux fromages ! Végans, à base de noix de cajou, ou même imprimés en 3D… Les fromages du futur sont là, même si ta grand-mère n’est pas prête à abandonner le roquefort."},
            {title: "La technologie au service du goût", content: "Des capteurs analysent l’affinage, des applis notent les plateaux… et bientôt, un assistant vocal pour retourner tes fromages à ta place ?"},
            {title: "L’IA va-t-elle remplacer les maîtres affineurs ?", content: "Un jour, un robot fera-t-il le meilleur brie du monde ? Peut-être… Mais il faudra encore inventer la passion (et la moustache) artificielle !"}
          ]
        },
        {
          title: "Chapitre 10 : Les 5 commandements du parfait fromager",
          sub: [
            {title: "Choisis, goûte, partage", content: "Le fromage, c’est comme la vie : il faut oser, goûter, et partager. Même le plus fort mérite sa chance, et une belle place sur ton plateau."},
            {title: "Respecte les saisons", content: "Comme les fruits, le fromage a ses saisons ! Un brie de printemps, un mont d’or d’hiver, et c’est le bonheur."},
            {title: "Ne lésine jamais sur la convivialité", content: "La règle d’or : toujours plus d’amis que de fromages, sinon tu risques de finir tout seul… mais avec du fromage, c’est déjà pas si mal."}
          ]
        },
      ],
      quiz: [
        {
          q: "Quel peuple a inventé le fromage selon la légende ?",
          a: ["Les Mayas", "Les premiers bergers", "Les Vikings"],
          correct: 1
        },
        {
          q: "Quel type de fromage est le plus coulant ?",
          a: ["Pâte dure", "Pâte molle", "Pâte pressée cuite"],
          correct: 1
        },
        {
          q: "Que permet l’affinage du fromage ?",
          a: ["Le bronzage", "Développer les arômes", "Ajouter du sucre"],
          correct: 1
        },
        {
          q: "Le fromage est-il bon pour les os ?",
          a: ["Non", "Oui", "Seulement l’été"],
          correct: 1
        },
        {
          q: "Quel aliment accompagne souvent le fromage en France ?",
          a: ["Du soda", "Du pain", "Des chips"],
          correct: 1
        },
        {
          q: "Comment NE PAS couper un brie ?",
          a: ["En biais", "En prenant la pointe", "En partant du centre"],
          correct: 1
        },
        {
          q: "Quel fromage n’est pas italien ?",
          a: ["Parmesan", "Brie", "Mozzarella"],
          correct: 1
        },
        {
          q: "Quel est l’avenir du fromage selon le livre ?",
          a: ["Disparaître", "S’ouvrir à l’innovation", "Être interdit"],
          correct: 1
        },
        {
          q: "Pour réussir un plateau, il faut…",
          a: ["Partager", "Le manger seul", "Ne rien dire à personne"],
          correct: 0
        },
        {
          q: "Quel est le meilleur moment pour manger du fromage ?",
          a: ["À chaque saison", "Juste en été", "Jamais"],
          correct: 0
        }
      ]
    };

    // ========== FONCTIONS INTERACTIVES ==========
    let chapterIdx = 0, subIdx = 0, pageTotal = book.chapters.length * 3;
    function startBook() {
      document.getElementById('coverScreen').style.display = 'none';
      buildTOC();
      document.getElementById('tocScreen').style.display = '';
      setProgress(0);
    }
    function buildTOC() {
      const toc = document.getElementById('tocList');
      toc.innerHTML = '';
      book.chapters.forEach((ch,i) => {
        const li = document.createElement('li');
        li.textContent = ch.title;
        li.onclick = ()=>showChapter(i,0);
        toc.appendChild(li);
      });
      updateTimeline();
    }
    function updateTimeline() {
      const timeline = document.getElementById('timeline');
      timeline.innerHTML = '';
      book.chapters.forEach((ch,i)=>{
        const step = document.createElement('div');
        step.className = "timeline-step";
        let dot = document.createElement('div');
        dot.className = "timeline-dot" + (i===chapterIdx ? " active":"");
        step.appendChild(dot);
        let label = document.createElement('div');
        label.className = "timeline-label";
        label.textContent = "Ch."+ (i+1);
        step.appendChild(label);
        timeline.appendChild(step);
      });
    }
    function showChapter(cidx, sidx) {
      document.getElementById('tocScreen').style.display = 'none';
      document.getElementById('chapterScreen').style.display = '';
      chapterIdx = cidx;
      subIdx = sidx;
      renderChapter();
      updateTimeline();
    }
    function renderChapter() {
      const ch = book.chapters[chapterIdx];
      document.getElementById('chapterTitle').textContent = ch.title;
      let html = '';
      ch.sub.forEach((s, i)=>{
        html += `
        <div class="subchapter-title">${s.title}</div>
        <div style="margin-bottom:12px;line-height:1.7">${s.content}</div>`;
      });
      document.getElementById('subChapters').innerHTML = html;
      // Button enable/disable
      document.getElementById('btnPrev').disabled = (chapterIdx===0);
      document.getElementById('btnNext').textContent = (chapterIdx===book.chapters.length-1) ? "Quiz final" : "Suivant";
      setProgress((chapterIdx*3)/pageTotal*100);
    }
    function goPrev() {
      if (chapterIdx>0) showChapter(chapterIdx-1,0);
    }
    function goNext() {
      if (chapterIdx < book.chapters.length-1)
        showChapter(chapterIdx+1,0);
      else
        showQuiz();
    }
    function setProgress(pourcent) {
      document.getElementById('progressInner').style.width = pourcent+"%";
    }
    function showQuiz() {
      document.getElementById('chapterScreen').style.display = 'none';
      document.getElementById('quizScreen').style.display = '';
      let html = '';
      book.quiz.forEach((q,qi)=>{
        html += `<div class="quiz-q">${qi+1}. ${q.q}</div>
        <div class="quiz-answers" id="ans${qi}">`;
        q.a.forEach((a,ai)=>{
          html += `<label><input type="radio" name="q${qi}" value="${ai}" onclick="selectAnswer(${qi},${ai})">${a}</label>`;
        });
        html += "</div>";
      });
      document.getElementById('quizContent').innerHTML = html;
      document.getElementById('quizScore').innerHTML = '';
      setProgress(100);
    }
    let userAnswers = Array(10).fill(null);
    function selectAnswer(qi,ai) {
      userAnswers[qi]=ai;
      // On affiche tout de suite les bonnes réponses
      const q = book.quiz[qi];
      let div = document.getElementById('ans'+qi);
      Array.from(div.children).forEach((label,i)=>{
        label.classList.remove('selected','correct','incorrect');
        if (i===ai) label.classList.add('selected');
        if (userAnswers[qi]!=null) {
          if (i===q.correct) label.classList.add('correct');
          else if (i===ai) label.classList.add('incorrect');
        }
      });
      // Score auto si tout rempli
      if (userAnswers.filter(a=>a===null).length===0) showScore();
    }
    function showScore() {
      let score = userAnswers.filter((a,i)=>a===book.quiz[i].correct).length;
      document.getElementById('quizScore').innerHTML = "Score final : "+score+"/10";
    }
    function restartBook() {
      document.getElementById('quizScreen').style.display = 'none';
      document.getElementById('coverScreen').style.display = '';
      setProgress(0);
      userAnswers = Array(10).fill(null);
    }
  </script>
<?php include 'bottom_nav.php'; ?>
<script src="script.js"></script>
</body>
</html>
