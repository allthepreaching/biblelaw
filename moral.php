<?php include_once 'header.php'; ?>
<!-- FLOAT MENU START -->
<div id="float-menu" class="float-menu">
  <div id="float-toggle" class="float-toggle"></div>
  <ul>

    <?php

    $query = "SELECT * FROM categories WHERE cat = 'Moral Law'";
    $result = mysqli_query($conn, $query);
    $output = '';
    while ($row = mysqli_fetch_array($result)) {
      $output .= '<a id="float-link" href="#' . $row['section_id'] . '"><li>' . $row['link_text'] . '</li></a>';
    }
    echo $output;

    ?>

  </ul>
</div>
<!-- FLOAT MENU END -->
<div class="content">
  <!-- MODAL START-->
  <div class="verse-modal" id="verse-modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <div class="modal-verse-container">
        <blockquote id="verse-quote">

        </blockquote>
      </div>
    </div>
  </div>
  <!-- MODAL END -->
  <h2>Moral Laws</h2>
  <h3 id="baptism">BAPTISM</h3>
  <ol>
    <li>
      <span class="main-li">Get Baptized</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Acts 2:38">Acts 2:38</span>
          ,
          <span class="modal-verse" id="Acts 10:48">10:48</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Baptize believers (in the name of The Father, and of The Son, and of The Holy Ghost)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 28:19">Matthew 28:19</span>
        </li>
        <li>
          this is the job of ordained officials but laymen should still encourage new believers to be baptized
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="bible">BIBLE</h3>
  <ol>
    <li>
      <span class="main-li">Read the Bible (daily)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 17:19">Deuteronomy 17:19</span> ,
          <span class="modal-verse" id="Acts 17:11">Acts 17:11</span> ,
          <span class="modal-verse" id="Isaiah 34:16">Isaiah 34:16</span> ,
          <span class="modal-verse" id="1 Timothy 4:13">1 Timothy 4:13</span> ,
          <span class="modal-verse" id="Revelation 1:3">Revelation 1:3</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">He that hath ears to hear, let him hear</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 11:15">Matthew 11:15</span> ,
          <span class="modal-verse" id="Matthew 13:9">13:9</span> ,
          <span class="modal-verse" id="Matthew 13:18">13:18</span> ,
          <span class="modal-verse" id="Matthew 13:43">13:43</span> ,
          <span class="modal-verse" id="Matthew 15:10">15:10</span> ,
          <span class="modal-verse" id="Matthew 17:5">17:5</span> ,
          <span class="modal-verse" id="Mark 4:3">Mark 4:3</span> ,
          <span class="modal-verse" id="Mark 4:9">4:9</span> ,
          <span class="modal-verse" id="Mark 4:23-24">4:23-24</span> ,
          <span class="modal-verse" id="Mark 7:14">7:14</span> ,
          <span class="modal-verse" id="Mark 7:16">7:16</span> ,
          <span class="modal-verse" id="Luke 8:8">Luke 8:8</span> ,
          <span class="modal-verse" id="Luke 8:18">8:18</span> ,
          <span class="modal-verse" id="Luke 14:35">14:35</span> ,
          <span class="modal-verse" id="Luke 18:6">18:6</span> ,
          <span class="modal-verse" id="2 Timothy 2:7">2 Timothy 2:7</span> ,
          <span class="modal-verse" id="Hebrews 12:25">Hebrews 12:25</span> ,
          <span class="modal-verse" id="Hebrews 13:22">13:22</span> ,
          <span class="modal-verse" id="James 2:5">James 2:5</span> ,
          <span class="modal-verse" id="Revelation 2:7">Revelation 2:7</span> ,
          <span class="modal-verse" id="Revelation 2:11">2:11</span> ,
          <span class="modal-verse" id="Revelation 2:17">2:17</span> ,
          <span class="modal-verse" id="Revelation 2:29">2:29</span> ,
          <span class="modal-verse" id="Revelation 3:6">3:6</span> ,
          <span class="modal-verse" id="Revelation 3:13">3:13</span> ,
          <span class="modal-verse" id="Revelation 3:22">3:22</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">The Bible is our spiritual food</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 4:4">Matthew 4:4</span> ,
          <span class="modal-verse" id="Luke 4:4">Luke 4:4</span> ,
          <span class="modal-verse" id="Deuteronomy 8:3">Deuteronomy 8:3</span> ,
          <span class="modal-verse" id="Ezekiel 2:8">Ezekiel 2:8</span> ,
          <span class="modal-verse" id="Ezekiel 3:1">3:1</span> ,
          <span class="modal-verse" id="Ezekiel 3:3">3:3</span> ,
          <span class="modal-verse" id="Revelation 10:9">Revelation 10:9</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Note: Compare amount of time you
        spend eating to reading or listening to the Bible</span>
    </li>
    <li>
      <span class="main-li">Do not add or diminish God’s Word</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 4:2">Deuteronomy 4:2</span> ,
          <span class="modal-verse" id="Deuteronomy 12:32">12:32</span> ,
          <span class="modal-verse" id="Proverbs 30:6">Proverbs 30:6</span> ,
          <span class="modal-verse" id="Revelation 22:18-19">Revelation 22:18-19</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="ceremonial-law">CEREMONIAL LAW</h3>
  <ol>
    <li>
      <span class="main-li">Understand the distinction between the ceremonial and moral laws</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 5:17">Matthew 5:17</span> ,
          <span class="modal-verse" id="Colossians 2:16">Colossians 2:16</span> ,
          <span class="modal-verse" id="1 Corinthians 7:18">1 Corinthians 7:18</span> ,
          <span class="modal-verse" id="Matthew 9:13">Matthew 9:13</span> ,
          <span class="modal-verse" id="Matthew 12:7">Matthew 12:7</span> ,
          <span class="modal-verse" id="Hosea 6:6">Hosea 6:6</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="civil-government">CIVIL GOVERNMENT</h3>
  <ol>
    <li>
      <span class="main-li">Pay taxes:</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 22:21">Matthew 22:21</span> ,
          <span class="modal-verse" id="Mark 12:17">Mark 12:17</span> ,
          <span class="modal-verse" id="Luke 20:25">Luke 20:25</span> ,
          <span class="modal-verse" id="Romans 13:7">Romans 13:7</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Avoid trouble with the law: by agreeing with thine adversary; handling disputes amongst brethren</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 5:25-26">Matthew 5:25-26</span> ,
          <span class="modal-verse" id="Matthew 5:40">5:40</span> ,
          <span class="modal-verse" id="Luke 12:57-58">Luke 12:57-58</span> ,
          <span class="modal-verse" id="1 Corinthians 6:1-7">1 Corinthians 6:1-7</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t conceal evil doers</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 13:8">Deuteronomy 13:8</span> ,
          <span class="modal-verse" id="Proverbs 28:17">Proverbs 28:17</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="communion">COMMUNION</h3>
  <ol>
    <li>
      <span class="main-li">Eat unleavened bread in remembrance of
        Jesus’ body and drink grape juice (fruit of the vine) in remembrance of
        Jesus’ blood</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 26:26-27">Matthew 26:26-27</span> ,
          <span class="modal-verse" id="Luke 22:19-20">Luke 22:19-20</span> ,
          <span class="modal-verse" id="1 Corinthians 11:24-25">1 Corinthians 11:24-25</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">This is a small gathering (it’s the new testament version of the
        Passover)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 11:20">1 Corinthians 11:20</span> ,
          <span class="modal-verse" id="Luke 22:15">Luke 22:15</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Note: large groups would allow unsaved people to participate to get sick/judged</span>
    </li>
    <li>
      <span class="main-li">This is a shared meal (must be orderly)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 11:21-22">1 Corinthians 11:21-22</span> ,
          <span class="modal-verse" id="1 Corinthians 11:33-34">11:33-34</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Note: large groups would allow unsaved people to participate to get sick/judged</span>
    </li>
    <li>
      <span class="main-li">Do not do this unworthily (A saved person is worthy, because of God’s righteousness: Example of Judas)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 11:27-32">1 Corinthians 11:27-32</span> ,
          <span class="modal-verse" id="1 Corinthians 11:18-19">11:18-19</span> ,
          <span class="modal-verse" id="1 Corinthians 11:23">11:23</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="disputes">DISPUTES</h3>
  <ol>
    <li>
      <span class="main-li">Avoid conflict</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 3:30">Proverbs 3:30</span> (requires cause) ,
          <span class="modal-verse" id="Proverbs 10:12">10:12</span> ,
          <span class="modal-verse" id="Proverbs 15:18">15:18</span> ,
          <span class="modal-verse" id="Proverbs 16:28">16:28</span> ,
          <span class="modal-verse" id="Proverbs 17:1">17:1</span> ,
          <span class="modal-verse" id="Proverbs 17:14">17:14</span> ,
          <span class="modal-verse" id="Proverbs 18:6">18:6</span> ,
          <span class="modal-verse" id="Proverbs 20:3">20:3</span> ,
          <span class="modal-verse" id="Proverbs 25:8">25:8</span> ,
          <span class="modal-verse" id="Proverbs 26:17">26:17</span> ,
          <span class="modal-verse" id="Proverbs 26:21">26:21</span> ,
          <span class="modal-verse" id="Romans 13:13">Romans 13:13</span> ,
          <span class="modal-verse" id="2 Corinthians 12:20">2 Corinthians 12:20</span> ,
          <span class="modal-verse" id="Galatians 5:15">Galatians 5:15</span> ,
          <span class="modal-verse" id="Galatians 5:20">5:20</span> ,
          <span class="modal-verse" id="Philippians 2:3">Philippians 2:3</span> ,
          <span class="modal-verse" id="Philippians 2:14">2:14</span> ,
          <span class="modal-verse" id="1 Timothy 3:3">1 Timothy 3:3</span> ,
          <span class="modal-verse" id="2 Timothy 2:24">2 Timothy 2:24</span> ,
          <span class="modal-verse" id="Titus 3:2">Titus 3:2</span> ,
          <span class="modal-verse" id="Titus 3:9">3:9</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Confess your faults one to another</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="James 5:16">James 5:16</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Yield to judgment from authorities</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Ecclesiastes 8:3">Ecclesiastes 8:3</span> ,
          <span class="modal-verse" id="Ecclesiastes 10:4">10:4</span> ,
          <span class="modal-verse" id="Micah 7:9">Micah 7:9</span> ,
          <span class="modal-verse" id="Zephaniah 1:7">Zephaniah 1:7</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Resist not evil (done to you): violence, theft, tribulation</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 5:39-41">Matthew 5:39-41</span> ,
          <span class="modal-verse" id="Luke 6:29">Luke 6:29</span> ,
          <span class="modal-verse" id="Luke 6:30">6:30</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Take no heed unto all words that are spoken (of you)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Ecclesiastes 7:21-22">Ecclesiastes 7:21-22</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Have long-suffering/forbearance</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 13:4">1 Corinthians 13:4</span> ,
          <span class="modal-verse" id="Galatians 5:22">Galatians 5:22</span> ,
          <span class="modal-verse" id="Ephesians 4:2">Ephesians 4:2</span> ,
          <span class="modal-verse" id="Colossians 3:12-13">Colossians 3:12-13</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Forgive</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 19:18">Leviticus 19:18</span> ,
          <span class="modal-verse" id="Proverbs 17:9">Proverbs 17:9</span> ,
          <span class="modal-verse" id="Proverbs 19:11">19:11</span> ,
          <span class="modal-verse" id="Matthew 6:12">Matthew 6:12</span> ,
          <span class="modal-verse" id="Matthew 18:21-35">18:21-35</span> ,
          <span class="modal-verse" id="Mark 11:25">Mark 11:25</span> ,
          <span class="modal-verse" id="Luke 17:3-4">Luke 17:3-4</span> ,
          <span class="modal-verse" id="Ephesians 4:31-32">Ephesians 4:31-32</span> ,
          <span class="modal-verse" id="Colossians 3:13">Colossians 3:13</span> ,
          <span class="modal-verse" id="Colossians 3:19">3:19</span> ,
          <span class="modal-verse" id="Hebrews 12:15">Hebrews 12:15</span> ,
          <span class="modal-verse" id="James 5:9">James 5:9</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Seek Peace</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Mark 9:50">Mark 9:50</span> ,
          <span class="modal-verse" id="Romans 12:18">Romans 12:18</span> ,
          <span class="modal-verse" id="2 Corinthians 13:11">2 Corinthians 13:11</span> ,
          <span class="modal-verse" id="Galatians 5:22">Galatians 5:22</span> ,
          <span class="modal-verse" id="Colossians 3:15">Colossians 3:15</span> ,
          <span class="modal-verse" id="1 Thessalonians 5:13">1 Thessalonians 5:13</span> ,
          <span class="modal-verse" id="2 Timothy 2:22">2 Timothy 2:22</span> ,
          <span class="modal-verse" id="Hebrews 12:14">Leviticus 19:18</span> ,
          <span class="modal-verse" id="1 Peter 3:11">1 Peter 3:11</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Avenge not yourselves</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 19:18">Leviticus 19:18</span> ,
          <span class="modal-verse" id="Proverbs 20:22">Proverbs 20:22</span> ,
          <span class="modal-verse" id="Proverbs 24:29">24:29</span> ,
          <span class="modal-verse" id="Romans 12:17">Romans 12:17</span> ,
          <span class="modal-verse" id="Romans 12:19">12:19</span> ,
          <span class="modal-verse" id="1 Thessalonians 5:15">1 Thessalonians 5:15</span> ,
          <span class="modal-verse" id="1 Peter 3:9">1 Peter 3:9</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Do violence to no man</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 27:24">Deuteronomy 27:24</span> ,
          <span class="modal-verse" id="Matthew 10:16">Matthew 10:16</span> ,
          <span class="modal-verse" id="Luke 3:14">Luke 3:14</span> ,
          <span class="modal-verse" id="1 Timothy 3:3">1 Timothy 3:3</span> ,
          <span class="modal-verse" id="Titus 1:7">Titus 1:7</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Do not murder</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 20:13">Exodus 20:13</span> ,
          <span class="modal-verse" id="Exodus 23:7">23:7</span> ,
          <span class="modal-verse" id="Leviticus 18:21">Leviticus 18:21</span> ,
          <span class="modal-verse" id="Deuteronomy 5:17">Deuteronomy 5:17</span> ,
          <span class="modal-verse" id="Deuteronomy 27:25">27:25</span> ,
          <span class="modal-verse" id="Proverbs 6:17">Proverbs 6:17</span> ,
          <span class="modal-verse" id="Ezekiel 22:9">Ezekiel 22:9</span> ,
          <span class="modal-verse" id="Matthew 19:18">Matthew 19:18</span> ,
          <span class="modal-verse" id="Mark 7:21">Mark 7:21</span> ,
          <span class="modal-verse" id="Mark 10:19">10:19</span> ,
          <span class="modal-verse" id="Luke 18:20">Luke 18:20</span> ,
          <span class="modal-verse" id="Romans 13:9">Romans 13:9</span> ,
          <span class="modal-verse" id="Galatians 5:21">Galatians 5:21</span> ,
          <span class="modal-verse" id="1 Timothy 1:9">1 Timothy 1:9</span> ,
          <span class="modal-verse" id="James 2:11">James 2:11</span> ,
          <span class="modal-verse" id="1 Peter 4:15">1 Peter 4:15</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Be ye angry, and sin not (righteous anger)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Ephesians 4:26">Ephesians 4:26</span>
        </li>
        <li>
          Requires a cause: <span class="modal-verse" id="Matthew 5:22">Matthew 5:22</span>
        </li>
        <li>
          is slow to happen: <span class="modal-verse" id="Proverbs 14:17">Proverbs 14:17</span> ,
          <span class="modal-verse" id="Proverbs 14:29">14:29</span> ,
          <span class="modal-verse" id="Proverbs 15:18">15:18</span> ,
          <span class="modal-verse" id="Proverbs 16:32">16:32</span> ,
          <span class="modal-verse" id="Ecclesiastes 7:9">Ecclesiastes 7:9</span> ,
          <span class="modal-verse" id="Titus 1:7">Titus 1:7</span> ,
          <span class="modal-verse" id="James 1:19">James 1:19</span>
        </li>
        <li>
          ends before sunset (endures but for a moment): <span class="modal-verse" id="Psalm 37:8">Psalm 37:8</span> ,
          <span class="modal-verse" id="Ephesians 4:26">Ephesians 4:26</span> ,
          <span class="modal-verse" id="Colossians 3:8">Colossians 3:8</span>
        </li>
        <li>
          In general, anger is bad: <span class="modal-verse" id="Proverbs 19:11">Proverbs 19:11</span> ,
          <span class="modal-verse" id="Proverbs 27:3-4">27:3-4</span> ,
          <span class="modal-verse" id="Proverbs 29:22">29:22</span> ,
          <span class="modal-verse" id="Proverbs 30:33">30:33</span> ,
          <span class="modal-verse" id="Romans 12:19">Romans 12:19</span> ,
          <span class="modal-verse" id="2 Corinthians 12:20">2 Corinthians 12:20</span> ,
          <span class="modal-verse" id="Galatians 5:20">Galatians 5:20</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="earth-agriculture-animal">EARTH/AGRICULTURE/ANIMAL CRUELTY</h3>
  <ol>
    <li>
      <span class="main-li">Subdue the earth (land)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Genesis 1:28">Genesis 1:28</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Have dominion over all animals</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Genesis 1:28">Genesis 1:28</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Farmer: Thou shalt not sow thy field with mingled seed (Genetically
        Modified Organisms or seeds)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 19:19">Leviticus 19:19</span> ,
          <span class="modal-verse" id="Deuteronomy 22:9">Deuteronomy 22:9</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Farmer: Thou shalt not let thy cattle gender with a diverse kind
        (result- mules, other animals)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 19:19">Leviticus 19:19</span> (symbolic of marrying an unbeliever)
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Farmer: Leave some harvest for the poor/strangers/fatherless/widows</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 19:9-10">Leviticus 19:9-10</span> ,
          <span class="modal-verse" id="Leviticus 23:22">23:22</span> ,
          <span class="modal-verse" id="Deuteronomy 24:19-22">Deuteronomy 24:19-22</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Lawful to take a handful of someone’s produce but not to
        gather in a vessel</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 23:24-25">Deuteronomy 23:24-25</span> ,
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t kill a dam and her young in one day</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 22:28">Leviticus 22:28</span> ,
          <span class="modal-verse" id="Deuteronomy 22:6-7">Deuteronomy 22:6-7</span> ,
          <span class="modal-verse" id="Proverbs 12:10">Proverbs 12:10</span> ,
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Thou shalt not seethe a kid in his mother's milk</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 23:19">Exodus 23:19</span> ,
          <span class="modal-verse" id="Proverbs 12:10">34:26</span> ,
          <span class="modal-verse" id="Deuteronomy 14:21">Deuteronomy 14:21</span> ,
          <span class="modal-verse" id="Proverbs 12:10">Proverbs 12:10</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Thou shalt not muzzle the ox when he treadeth out the corn</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 25:4">Deuteronomy 25:4</span> ,
          <span class="modal-verse" id="Proverbs 12:10">Proverbs 12:10</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Thou shalt not plow with an ox and an ass together</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 22:10">Deuteronomy 22:10</span> ,
          <span class="modal-verse" id="Proverbs 12:10">Proverbs 12:10</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="end-times-prophecy-commands">END TIMES PROPHECY COMMANDS</h3>
  <ol>
    <li>
      <span class="main-li">Watch (don’t sleep): be
        vigilant</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 24:42-44">Matthew 24:42-44</span> ,
          <span class="modal-verse" id="Matthew 25:13">25:13</span> ,
          <span class="modal-verse" id="Mark 13:33-37">Mark 13:33-37</span> ,
          <span class="modal-verse" id="Luke 12:35">Luke 12:35</span> ,
          <span class="modal-verse" id="Luke 12:40">12:40</span> ,
          <span class="modal-verse" id="Luke 21:34">21:34</span> ,
          <span class="modal-verse" id="Acts 20:31">Acts 20:31</span> ,
          <span class="modal-verse" id="1 Corinthians 16:13">1 Corinthians 16:13</span> ,
          <span class="modal-verse" id="1 Thessalonians 5:6-7">1 Thessalonians 5:6-7</span> ,
          <span class="modal-verse" id="2 Timothy 4:5">2 Timothy 4:5</span> ,
          <span class="modal-verse" id="1 Peter 4:7">1 Peter 4:7</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Study/observe end times prophecy</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 24:15">Matthew 24:15</span> ,
          <span class="modal-verse" id="Mark 13:14">Mark 13:14</span> ,
          <span class="modal-verse" id="Mark 28-29">28-29</span> ,
          <span class="modal-verse" id="Luke 21:28">Luke 21:28</span> ,
          <span class="modal-verse" id="Luke 21:31">21:31</span> ,
          <span class="modal-verse" id="1 Peter 1:13">1 Peter 1:13</span> ,
          <span class="modal-verse" id="1 Peter 4:7">4:7</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Be not troubled at war or rumors of war</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 24:6">Matthew 24:6</span> ,
          <span class="modal-verse" id="Mark 13:7">Mark 13:7</span> ,
          <span class="modal-verse" id="Luke 21:9">Luke 21:9</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t believe false “Christs”</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 24:4">Matthew 24:4</span> ,
          <span class="modal-verse" id="Matthew 24:23">24:23</span> ,
          <span class="modal-verse" id="Matthew 24:26">24:26</span> ,
          <span class="modal-verse" id="Mark 13:5">Mark 13:5</span> ,
          <span class="modal-verse" id="Mark 13:21">13:21</span> ,
          <span class="modal-verse" id="Luke 21:8">Luke 21:8</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Let no man deceive you (that day of Christ is at hand)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="2 Thessalonians 2:2-3">2 Thessalonians 2:2-3</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Know that wickedness will abound in the last days</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="2 Timothy 3:1">2 Timothy 3:1</span> ,
          <span class="modal-verse" id="Jude 1:17-18">Jude 1:17-18</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Know the desolation is nigh when you see Jerusalem compassed with armies</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Mark 13:28-29">Mark 13:28-29</span> ,
          <span class="modal-verse" id="Luke 21:20">Luke 21:20</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Count the number of the beast</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Revelation 13:18">Revelation 13:18</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Know that a day with the Lord is as a thousand years</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="2 Peter 3:8">2 Peter 3:8</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Flee at the abomination of desolation (them in Judaea)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 24:16">Matthew 24:16</span> ,
          <span class="modal-verse" id="Matthew 24:33">24:33</span> ,
          <span class="modal-verse" id="Mark 13:14">Mark 13:14</span> ,
          <span class="modal-verse" id="Luke 21:21">Luke 21:21</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Take nothing with you, Remember Lot’s wife (She looked behind)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 24:17-18">Matthew 24:17-18</span> ,
          <span class="modal-verse" id="Mark 13:15-16">Mark 13:15-16</span> ,
          <span class="modal-verse" id="Luke 17:31-32">Luke 17:31-32</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Pray that your flight be not in the winter or Sabbath day</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 24:20">Matthew 24:20</span> ,
          <span class="modal-verse" id="Mark 13:18">Mark 13:18</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Pray you will survive the tribulation, till the 2nd Coming</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Luke 21:36">Luke 21:36</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Comfort one another (by reminding them about the 2nd coming of Christ)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Thessalonians 4:18">1 Thessalonians 4:18</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="excommunication">EXCOMMUNICATION</h3>
  <ol>
    <li>
      <span class="main-li">Principle: Churches have been given absolute authority to kick people out</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 18:18">Matthew 18:18</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Someone who wrongs another church member and is unrepentant</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 18:15-17">Matthew 18:15-17</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Requires 2 or 3 witnesses</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 19:15">Deuteronomy 19:15</span> ,
          <span class="modal-verse" id="Matthew 18:16">Matthew 18:16</span> ,
          <span class="modal-verse" id="2 Corinthians 13:1">2 Corinthians 13:1</span> ,
          <span class="modal-verse" id="1 Timothy 5:19">1 Timothy 5:19</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Requires bringing the grievance to the whole church</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 18:17">Matthew 18:17</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Brethren refusing to work</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="2 Thessalonians 3:6">2 Thessalonians 3:6</span> ,
          <span class="modal-verse" id="2 Thessalonians 3:14">3:14</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">False prophets</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Ezekiel 13:9">Ezekiel 13:9</span> ,
          <span class="modal-verse" id="1 Timothy 6:3-5">1 Timothy 6:3-5</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Someone teaching a false gospel</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Galatians 5:12">Galatians 5:12</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Fornicators</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 5:1-13">1 Corinthians 5:1-13</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Covetous persons</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 5:1-13">1 Corinthians 5:1-13</span> ,
          <span class="modal-verse" id="Proverbs 23:6-8">Proverbs 23:6-8</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Idolaters</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 5:1-13">1 Corinthians 5:1-13</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Railers (One who scoffs, insults, censures or reproaches with opprobrious language)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 5:1-13">1 Corinthians 5:1-13</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Drunkards</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 5:1-13">1 Corinthians 5:1-13</span> ,
          <span class="modal-verse" id="Proverbs 23:20-21">Proverbs 23:20-21</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Extortioners</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 5:1-13">1 Corinthians 5:1-13</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">People who cause division (when it’s not according to the bible)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Romans 16:17">Romans 16:17</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="family">FAMILY</h3>
  <ol>
    <li>
      <span class="main-li">Marriage</span>
      <ul class="styled">
        <li>
          Leave your parents to get married
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Genesis 2:24">Genesis 2:24</span> ,
              <span class="modal-verse" id="Matthew 19:5">Matthew 19:5</span> ,
              <span class="modal-verse" id="Mark 10:7">Mark 10:7</span> ,
              <span class="modal-verse" id="Ephesians 5:31">Ephesians 5:31</span>
            </li>
            <li>
              Note: there are exceptions to this rule including ministry work (Paul, etc.)
            </li>
          </ul>
        </li>
        <li>
          Husbands rule over their wives (leadership)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Genesis 3:16">Genesis 3:16</span> ,
              <span class="modal-verse" id="1 Corinthians 11:3">1 Corinthians 11:3</span> ,
              <span class="modal-verse" id="1 Timothy 2:12-13">2:12-13</span> ,
              <span class="modal-verse" id="1 Timothy 3:5">3:5</span> ,
              <span class="modal-verse" id="1 Timothy 3:12">3:12</span>
            </li>
          </ul>
        </li>
        <li>
          Husbands dwell with your wife according to knowledge
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Peter 3:7">1 Peter 3:7</span>
            </li>
          </ul>
        </li>
        <li>
          Cheer up your wife
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 24:5">Deuteronomy 24:5</span> ,
              <span class="modal-verse" id="Proverbs 5:18-19">Proverbs 5:18-19</span> ,
              <span class="modal-verse" id="Ecclesiastes 9:9">Ecclesiastes 9:9</span> ,
              <span class="modal-verse" id="Ephesians 5:29">Ephesians 5:29</span>
            </li>
          </ul>
        </li>
        <li>
          Wife’s role: homemaker
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Psalm 113:9">Psalm 113:9</span> ,
              <span class="modal-verse" id="Proverbs 7:11-12">Proverbs 7:11-12</span> ,
              <span class="modal-verse" id="Proverbs 14:1">14:1</span> ,
              <span class="modal-verse" id="Proverbs 31:27">31:27</span> ,
              <span class="modal-verse" id="Song of Solomon 1:6-8">Song of Solomon 1:6-8</span> ,
              <span class="modal-verse" id="Song of Solomon 8:12">8:12</span> ,
              <span class="modal-verse" id="1 Timothy 5:14">1 Timothy 5:14</span> ,
              <span class="modal-verse" id="Titus 2:5">Titus 2:5</span> ,
            </li>
            <li>Note: the wife is a helper to her husband
              <ul class="sub">
                <li>
                  <span class="modal-verse" id="Genesis 2:18">Genesis 2:18</span> ,
                  <span class="modal-verse" id="Proverbs 31:12">Proverbs 31:12</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          Let every man have his own wife, and let every woman have her own husband
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Genesis 2:18">Genesis 2:18</span> ,
              <span class="modal-verse" id="Genesis 2:24">2:24</span> ,
              <span class="modal-verse" id="Proverbs 18:22">Proverbs 18:22</span> ,
              <span class="modal-verse" id="1 Corinthians 7:2">1 Corinthians 7:2</span> ,
              <span class="modal-verse" id="1 Timothy 5:14">1 Timothy 5:14</span> ,
              <span class="modal-verse" id="1 Timothy 5:14">1 Timothy 5:14</span>
            </li>
            <li>
              Major reason to marry: To avoid fornication, better to marry than to burn
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="1 Corinthians 7:2">1 Corinthians 7:2</span> ,
                  <span class="modal-verse" id="1 Corinthians 7:9">7:9</span>
                </li>
                <li>
                  Note: There is the rare exception to this command
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          Do not marry a heathen (unbeliever)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Genesis 6:1-6">Genesis 6:1-6</span> ,
              <span class="modal-verse" id="Exodus 34:16">Exodus 34:16</span> ,
              <span class="modal-verse" id="Leviticus 21:14">Leviticus 21:14</span> ,
              <span class="modal-verse" id="Deuteronomy 7:3-4">Deuteronomy 7:3-4</span> ,
              <span class="modal-verse" id="Deuteronomy 23:3">23:3</span> ,
              <span class="modal-verse" id="1 Kings 11:1-2">1 Kings 11:1-2</span> ,
              <span class="modal-verse" id="Ezra 9:1-2">Ezra 9:1-2</span> ,
              <span class="modal-verse" id="Ezra 9:12-14">9:12-14</span> ,
              <span class="modal-verse" id="Ezra 10:2">10:2</span> ,
              <span class="modal-verse" id="Nehemiah 13:1-3">Nehemiah 13:1-3</span> ,
              <span class="modal-verse" id="Nehemiah 13:23-27">13:23-27</span> ,
              <span class="modal-verse" id="Song of Solomon 4:9">Song of Solomon 4:9</span> ,
              <span class="modal-verse" id="Song of Solomon 4:12">4:12</span> ,
              <span class="modal-verse" id="Song of Solomon 5:1">5:1</span> ,
              <span class="modal-verse" id="1 Corinthians 7:39">1 Corinthians 7:39</span> ,
              <span class="modal-verse" id="2 Corinthians 6:14-16">2 Corinthians 6:14-16</span>
            </li>
          </ul>
        </li>
        <li>
          Marriage must be monogamous; Polygamy is a sin
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Genesis 2:24">Genesis 2:24</span> ,
              <span class="modal-verse" id="Leviticus 18:18">Leviticus 18:18</span> ,
              <span class="modal-verse" id="Deuteronomy 17:17">Deuteronomy 17:17</span> ,
              <span class="modal-verse" id="Proverbs 5:15-18">Proverbs 5:15-18</span> ,
              <span class="modal-verse" id="Proverbs 9:16-17">9:16-17</span> ,
              <span class="modal-verse" id="Song of Solomon 4:12-16">Song of Solomon 4:12-16</span> ,
              <span class="modal-verse" id="Matthew 19:4-6">Matthew 19:4-6</span> ,
              <span class="modal-verse" id="Mark 10:5-9">Mark 10:5-9</span> ,
              <span class="modal-verse" id="1 Corinthians 7:2">1 Corinthians 7:2</span> ,
              <span class="modal-verse" id="1 Timothy 3:2">1 Timothy 3:2</span> ,
              <span class="modal-verse" id="1 Timothy 3:12">3:12</span> ,
              <span class="modal-verse" id="1 Timothy 5:9">5:9</span> ,
              <span class="modal-verse" id="Titus 1:6">Titus 1:6</span>
            </li>
          </ul>
        </li>
        <li>
          Be fruitful and multiply and replenish the earth (birth control is a sin)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Genesis 1:28">Genesis 1:28</span> ,
              <span class="modal-verse" id="Genesis 3:16">3:16</span> ,
              <span class="modal-verse" id="Genesis 9:1">9:1</span> ,
              <span class="modal-verse" id="Genesis 9:7">9:7</span> ,
              <span class="modal-verse" id="Genesis 38:7-10">38:7-10</span> ,
              <span class="modal-verse" id="Proverbs 17:6">Proverbs 17:6</span> ,
              <span class="modal-verse" id="1 Timothy 5:14">1 Timothy 5:14</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t charge a man with any business during his first year of marriage (Means any work that physically separates/dislocates you from your spouse. Example: war, overseas trips, etc.)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 24:5">Deuteronomy 24:5</span> ,
              <span class="modal-verse" id="Proverbs 27:8">Proverbs 27:8</span>
            </li>
          </ul>
        </li>
        <li>
          Defraud ye not one the other, except it be with consent for a time, that ye may give yourselves to fasting and prayer; and come together again
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 21:10">Exodus 21:10</span> ,
              <span class="modal-verse" id="1 Corinthians 7:3-5">1 Corinthians 7:3-5</span> ,
              <span class="modal-verse" id="Song of Solomon 2:16">Song of Solomon 2:16</span> ,
              <span class="modal-verse" id="Song of Solomon 3:4">3:4</span>
            </li>
          </ul>
        </li>
      </ul>
    <li>
      <span class="main-li">Divorce and Remarriage</span>
      <ul class="styled">
        <li>
          Divorce is a sin
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Genesis 2:21-24">Genesis 2:21-24</span> ,
              <span class="modal-verse" id="Deuteronomy 22:19">Deuteronomy 22:19</span> ,
              <span class="modal-verse" id="Deuteronomy 22:29">22:29</span> ,
              <span class="modal-verse" id="Malachi 2:14-16">Malachi 2:14-16</span> ,
              <span class="modal-verse" id="Matthew 5:31-32">Matthew 5:31-32</span> ,
              <span class="modal-verse" id="Matthew 19:3-6">19:3-6</span> ,
              <span class="modal-verse" id="Mark 10:2-9">Mark 10:2-9</span> ,
              <span class="modal-verse" id="Mark 10:11-12">10:11-12</span> ,
              <span class="modal-verse" id="1 Corinthians 7:10-14">1 Corinthians 7:10-14</span> ,
              <span class="modal-verse" id="Ephesians 5:31">Ephesians 5:31</span> ,
              <span class="modal-verse" id="Hebrews 13:4-5">Hebrews 13:4-5</span>
            </li>
          </ul>
        </li>
        <li>
          Exception to divorce- the cause of fornication
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 22:19">Deuteronomy 22:19</span> ,
              <span class="modal-verse" id="Deuteronomy 22:29">22:29</span> ,
              <span class="modal-verse" id="Deuteronomy 24:1-3">24:1-3</span> ,
              <span class="modal-verse" id="Matthew 1:18-20">Matthew 1:18-20</span> ,
              <span class="modal-verse" id="Matthew 5:32">5:32</span> ,
              <span class="modal-verse" id="Matthew 19:9">19:9</span>
            </li>
            <li>
              Moses permitted this because of the hardness of their hearts but from the beginning it was not so
            </li>
            <ul class="styled">
              <li>
                <span class="modal-verse" id="Matthew 19:7-8">Matthew 19:7-8</span>
              </li>
            </ul>
          </ul>
        </li>
        <li>
          But and if she depart, let her remain unmarried or be reconciled to her husband: (otherwise it is adultery) (same goes for the husband)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 5:32">Matthew 5:32</span> ,
              <span class="modal-verse" id="Luke 16:18">Luke 16:18</span> ,
              <span class="modal-verse" id="1 Corinthians 7:11">1 Corinthians 7:11</span>
            </li>
          </ul>
        </li>
        <li>
          Permitted to marry another if spouse is dead
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Romans 7:2">Romans 7:2</span> ,
              <span class="modal-verse" id="1 Corinthians 7:39">1 Corinthians 7:39</span> ,
              <span class="modal-verse" id="1 Timothy 5:14">1 Timothy 5:14</span> (context of widows)
            </li>
          </ul>
        </li>
        <li>
          If the latter husband divorces her or dies; the former husband cannot remarry her
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 24:3-4">Deuteronomy 24:3-4</span> ,
              <span class="modal-verse" id="Jeremiah 3:1">Jeremiah 3:1</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Child Rearing</span>
      <ul class="styled">
        <li>
          Fathers rule over their children (leadership)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Genesis 18:19">Genesis 18:19</span> ,
              <span class="modal-verse" id="1 Timothy 3:4-5">1 Timothy 3:4-5</span> ,
              <span class="modal-verse" id="1 Timothy 3:12">3:12</span>
          </ul>
        </li>
        <li>
          Train/teach/admonish/advise/command/nurture your children and grandchildren to obey the Bible
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Genesis 18:19">Genesis 18:19</span> ,
              <span class="modal-verse" id="Deuteronomy 4:9-10">Deuteronomy 4:9-10</span> ,
              <span class="modal-verse" id="Deuteronomy 6:7">6:7</span> ,
              <span class="modal-verse" id="Deuteronomy 11:19-20">11:19-20</span> ,
              <span class="modal-verse" id="Proverbs 10:1">Proverbs 10:1</span> ,
              <span class="modal-verse" id="Proverbs 15:20">15:20</span> ,
              <span class="modal-verse" id="Proverbs 17:21">17:21</span> ,
              <span class="modal-verse" id="Proverbs 17:25">17:25</span> ,
              <span class="modal-verse" id="Proverbs 19:13">19:13</span> ,
              <span class="modal-verse" id="Proverbs 22:6">22:6</span> ,
              <span class="modal-verse" id="Proverbs 23:24">23:24</span> ,
              <span class="modal-verse" id="Proverbs 29:15">29:15</span> ,
              <span class="modal-verse" id="Proverbs 29:17">29:17</span> ,
              <span class="modal-verse" id="Ephesians 6:4">Ephesians 6:4</span>
          </ul>
        </li>
        <li>
          Thou shalt beat him with the rod (Spanking)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 13:24">Proverbs 13:24</span> ,
              <span class="modal-verse" id="Proverbs 19:18">19:18</span> ,
              <span class="modal-verse" id="Proverbs 22:15">22:15</span> ,
              <span class="modal-verse" id="Proverbs 23:13-14">23:13-14</span> ,
              <span class="modal-verse" id="Proverbs 29:15">29:15</span> ,
              <span class="modal-verse" id="Ecclesiastes 8:11">Ecclesiastes 8:11</span>
          </ul>
        </li>
        <li>
          Fathers, provoke not your children to anger/wrath (don’t provoke them)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Ephesians 6:4">Ephesians 6:4</span> ,
              <span class="modal-verse" id="Colossians 3:21">Colossians 3:21</span>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="fear">FEAR</h3>
  <ol>
    <li>
      <span class="main-li">Fear God</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 23:21">Exodus 23:21</span> ,
          <span class="modal-verse" id="Leviticus 19:14">Leviticus 19:14</span> ,
          <span class="modal-verse" id="Leviticus 19:32">19:32</span> ,
          <span class="modal-verse" id="Leviticus 25:36">25:36</span> ,
          <span class="modal-verse" id="Deuteronomy 5:29">Deuteronomy 5:29</span> ,
          <span class="modal-verse" id="Deuteronomy 6:13">6:13</span> ,
          <span class="modal-verse" id="Deuteronomy 6:24">6:24</span> ,
          <span class="modal-verse" id="Deuteronomy 8:6">8:6</span> ,
          <span class="modal-verse" id="Deuteronomy 10:12">10:12</span> ,
          <span class="modal-verse" id="Deuteronomy 10:20">10:20</span> ,
          <span class="modal-verse" id="Deuteronomy 13:4">13:4</span> ,
          <span class="modal-verse" id="Joshua 24:14">Joshua 24:14</span> ,
          <span class="modal-verse" id="1 Samuel 12:24">1 Samuel 12:24</span> ,
          <span class="modal-verse" id="2 Kings 17:36">2 Kings 17:36</span> ,
          <span class="modal-verse" id="2 Kings 17:39">17:39</span> ,
          <span class="modal-verse" id="1 Chronicles 16:30">1 Chronicles 16:30</span> ,
          <span class="modal-verse" id="Job 40:3-5">Job 40:3-5</span> ,
          <span class="modal-verse" id="Psalm 2:11">Psalm 2:11</span> ,
          <span class="modal-verse" id="Psalm 22:23">22:23</span> ,
          <span class="modal-verse" id="Psalm 33:8">33:8</span> ,
          <span class="modal-verse" id="Psalm 34:9">34:9</span> ,
          <span class="modal-verse" id="Psalm 76:7">76:7</span> ,
          <span class="modal-verse" id="Psalm 76:11">116:7</span> ,
          <span class="modal-verse" id="Psalm 85:11">85:11</span> ,
          <span class="modal-verse" id="Psalm 89:7">89:7</span> ,
          <span class="modal-verse" id="Psalm 90:11-12">90:11-12</span> ,
          <span class="modal-verse" id="Psalm 96:9">96:9</span> ,
          <span class="modal-verse" id="Psalm 119:120">119:120</span> ,
          <span class="modal-verse" id="Psalm 130:3-4">130:3-4</span> ,
          <span class="modal-verse" id="Proverbs 1:7">Proverbs 1:7</span> ,
          <span class="modal-verse" id="Proverbs 3:7">3:7</span> ,
          <span class="modal-verse" id="Proverbs 8:13">8:13</span> ,
          <span class="modal-verse" id="Proverbs 10:27">10:27</span> ,
          <span class="modal-verse" id="Proverbs 13:13">13:13</span> ,
          <span class="modal-verse" id="Proverbs 14:16">14:16</span> ,
          <span class="modal-verse" id="Proverbs 14:26-27">14:26-27</span> ,
          <span class="modal-verse" id="Proverbs 15:16">15:16</span> ,
          <span class="modal-verse" id="Proverbs 15:33">15:33</span> ,
          <span class="modal-verse" id="Proverbs 16:6">16:6</span> ,
          <span class="modal-verse" id="Proverbs 19:23">19:23</span> ,
          <span class="modal-verse" id="Proverbs 22:4">22:4</span> ,
          <span class="modal-verse" id="Proverbs 23:17">23:17</span> ,
          <span class="modal-verse" id="Proverbs 24:21">24:21</span> ,
          <span class="modal-verse" id="Proverbs 28:14">28:14</span> ,
          <span class="modal-verse" id="Ecclesiastes 12:13">Ecclesiastes 12:13</span> ,
          <span class="modal-verse" id="Isaiah 8:13">Isaiah 8:13</span> ,
          <span class="modal-verse" id="Isaiah 11:2">Isaiah 11:2</span> ,
          <span class="modal-verse" id="Malachi 1:14">Malachi 1:14</span> ,
          <span class="modal-verse" id="Matthew 10:28">Matthew 10:28</span> ,
          <span class="modal-verse" id="Luke 12:5">Luke 12:5</span> ,
          <span class="modal-verse" id="Romans 11:20">Romans 11:20</span> ,
          <span class="modal-verse" id="2 Corinthians 7:1">2 Corinthians 7:1</span> ,
          <span class="modal-verse" id="Philippians 2:12">Philippians 2:12</span> ,
          <span class="modal-verse" id="Colossians 3:22">Colossians 3:22</span> ,
          <span class="modal-verse" id="Hebrews 4:1">Hebrews 4:1</span> ,
          <span class="modal-verse" id="Hebrews 12:28">12:28</span> ,
          <span class="modal-verse" id="1 Peter 1:17">1 Peter 1:17</span> ,
          <span class="modal-verse" id="1 Peter 2:17">2:17</span> ,
          <span class="modal-verse" id="Revelation 14:7">Revelation 14:7</span>
          <ul class="sub">
            <li>
              Note: With Trembling
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Psalm 2:11">Psalm 2:11</span> ,
                  <span class="modal-verse" id="Ephesians 6:5">Ephesians 6:5</span> ,
                  <span class="modal-verse" id="Philippians 2:12">Philippians 2:12</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Fear your parents</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 19:3">Leviticus 19:3</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Fear the government when you do evil</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 20:2">Proverbs 20:2</span> ,
          <span class="modal-verse" id="Proverbs 24:21">24:21</span> ,
          <span class="modal-verse" id="Romans 13:4">Romans 13:4</span> ,
          <span class="modal-verse" id="Romans 13:7">13:7</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Fear your masters</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Malachi 1:6">Malachi 1:6</span> ,
          <span class="modal-verse" id="Ephesians 6:5">Ephesians 6:5</span> ,
          <span class="modal-verse" id="1 Peter 2:18">1 Peter 2:18</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Fear not (everything else)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Genesis 15:1">Genesis 15:1</span> ,
          <span class="modal-verse" id="Genesis 26:24">26:24</span> ,
          <span class="modal-verse" id="Deuteronomy 31:6">Deuteronomy 31:6</span> ,
          <span class="modal-verse" id="Deuteronomy 31:8">31:8</span> ,
          <span class="modal-verse" id="Joshua 1:9">Joshua 1:9</span> ,
          <span class="modal-verse" id="Joshua 8:1">8:1</span> ,
          <span class="modal-verse" id="Joshua 10:8">10:8</span> ,
          <span class="modal-verse" id="1 Samuel 12:20">1 Samuel 12:20</span> ,
          <span class="modal-verse" id="1 Chronicles 22:13">1 Chronicles 22:13</span> ,
          <span class="modal-verse" id="1 Chronicles 28:20">28:20</span> ,
          <span class="modal-verse" id="2 Chronicles 20:15">2 Chronicles 20:15</span> ,
          <span class="modal-verse" id="2 Chronicles 20:17">20:17</span> ,
          <span class="modal-verse" id="Job 31:34">Job 31:34</span> ,
          <span class="modal-verse" id="Psalm 37:1">Psalm 37:1</span> ,
          <span class="modal-verse" id="Psalm 37:7">37:7</span> ,
          <span class="modal-verse" id="Psalm 49:16">49:16</span> ,
          <span class="modal-verse" id="Proverbs 3:25-26">Proverbs 3:25-26</span> ,
          <span class="modal-verse" id="Proverbs 24:19">24:19</span> ,
          <span class="modal-verse" id="Proverbs 29:25">29:25</span> ,
          <span class="modal-verse" id="Isaiah 35:4">Isaiah 35:4</span> ,
          <span class="modal-verse" id="Isaiah 41:10">41:10</span> ,
          <span class="modal-verse" id="Isaiah 41:14">41:14</span> ,
          <span class="modal-verse" id="Isaiah 43:1">43:1</span> ,
          <span class="modal-verse" id="Isaiah 43:5">43:5</span> ,
          <span class="modal-verse" id="Isaiah 44:2">44:2</span> ,
          <span class="modal-verse" id="Isaiah 51:7">51:7</span> ,
          <span class="modal-verse" id="Jeremiah 1:8">Jeremiah 1:8</span> ,
          <span class="modal-verse" id="Jeremiah 1:17">1:17</span> ,
          <span class="modal-verse" id="Lamentations 3:57">Lamentations 3:57</span> ,
          <span class="modal-verse" id="Ezekiel 2:6">Ezekiel 2:6</span> ,
          <span class="modal-verse" id="Ezekiel 3:9">3:9</span> ,
          <span class="modal-verse" id="Zephaniah 3:16">Zephaniah 3:16</span> ,
          <span class="modal-verse" id="Haggai 2:5">Haggai 2:5</span> ,
          <span class="modal-verse" id="Zechariah 8:13">Zechariah 8:13</span> ,
          <span class="modal-verse" id="Matthew 10:26">Matthew 10:26</span> ,
          <span class="modal-verse" id="Matthew 10:28">10:28</span> ,
          <span class="modal-verse" id="Matthew 10:31">10:31</span> ,
          <span class="modal-verse" id="Luke 5:10">Luke 5:10</span> ,
          <span class="modal-verse" id="Luke 12:4">12:4</span> ,
          <span class="modal-verse" id="Luke 12:7">12:7</span> ,
          <span class="modal-verse" id="Luke 12:32">12:32</span> ,
          <span class="modal-verse" id="Luke 21:9">21:9</span> ,
          <span class="modal-verse" id="John 14:1">John 14:1</span> ,
          <span class="modal-verse" id="John 14:27">14:27</span> ,
          <span class="modal-verse" id="Philippians 1:28">Philippians 1:28</span> ,
          <span class="modal-verse" id="2 Timothy 1:7">2 Timothy 1:7</span> ,
          <span class="modal-verse" id="Hebrews 13:6">Hebrews 13:6</span> ,
          <span class="modal-verse" id="1 Peter 3:14">1 Peter 3:14</span> ,
          <span class="modal-verse" id="Revelation 1:17">Revelation 1:17</span> ,
          <span class="modal-verse" id="Revelation 2:10">2:10</span>
          <ul class="sub">
            <li>
              Ye shall not be afraid of the face of man (as a judge)
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Deuteronomy 1:17">Deuteronomy 1:17</span>
                </li>
              </ul>
            </li>
            <li>
              Thou shalt not be afraid of him (the false prophet)
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Deuteronomy 18:22">Deuteronomy 18:22</span>
                </li>
                <li>
                  Note: people fear because of uncertainty about God’s promises (opposite of faith)
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Have courage</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 31:6-7">Deuteronomy 31:6-7</span> ,
          <span class="modal-verse" id="Deuteronomy 31:23">31:23</span> ,
          <span class="modal-verse" id="Joshua 1:6-7">Joshua 1:6-7</span> ,
          <span class="modal-verse" id="Joshua 1:9">1:9</span> ,
          <span class="modal-verse" id="Joshua 23:6">23:6</span> ,
          <span class="modal-verse" id="2 Chronicles 32:7">2 Chronicles 32:7</span> ,
          <span class="modal-verse" id="Psalm 31:24">Psalm 31:24</span> ,
          <span class="modal-verse" id="Isaiah 35:3-4">Isaiah 35:3-4</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="fornication">FORNICATION</h3>
  <ol>
    <li>
      <span class="main-li">A man must marry a maid (virgin) that he lies with (unless the father rejects him)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 22:16">Exodus 22:16</span> ,
          <span class="modal-verse" id="Deuteronomy 22:28-29">Deuteronomy 22:28-29</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="friends">FRIENDS</h3>
  <ol>
    <li>
      <span class="main-li">Don’t forsake your friends</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 18:24">Proverbs 18:24</span> ,
          <span class="modal-verse" id="Proverbs 27:10">27:10</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t be friends/companions with… </span>
      <ul class="styled">
        <li>
          An angry man
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 22:24">Proverbs 22:24</span>
            </li>
          </ul>
        <li>
          A glutton/drunkard
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 23:20-21">Proverbs 23:20-21</span> ,
              <span class="modal-verse" id="Proverbs 28:7">28:7</span>
            </li>
          </ul>
        </li>
        <li>
          A flatterer
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 20:19">Proverbs 20:19</span>
            </li>
          </ul>
        </li>
        <li>
          Unbelievers
          <ul class="sub">
            <li>
              <span class="modal-verse" id="2 Corinthians 6:14-18">2 Corinthians 6:14-18</span>
            </li>
          </ul>
        </li>
        <li>
          Evil men
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 1:15">Proverbs 1:15</span> ,
              <span class="modal-verse" id="Proverbs 24:1">24:1</span> ,
              <span class="modal-verse" id="2 Timothy 3:5">2 Timothy 3:5</span>
            </li>
          </ul>
        </li>
        <li>
          Scorners
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 22:10">Proverbs 22:10</span>
            </li>
          </ul>
        </li>
        <li>
          Those given to change
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 24:21">Proverbs 24:21</span>
            </li>
          </ul>
        </li>
        <li>
          Foolish men
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 13:20">Proverbs 13:20</span> ,
              <span class="modal-verse" id="Proverbs 14:7">14:7</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Be friends/companions with…</span>
      <ul class="styled">
        <li>
          Those that fear God/Wise men
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Psalm 119:63">Psalm 119:63</span> ,
              <span class="modal-verse" id="Proverbs 13:20">Proverbs 13:20</span> ,
              <span class="modal-verse" id="Proverbs 15:13">15:13</span> ,
              <span class="modal-verse" id="2 Timothy 2:22">2 Timothy 2:22</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="gender">GENDER</h3>
  <ol>
    <li>
      <span class="main-li">Sin of effeminacy</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 kings 2:2">1 kings 2:2</span> ,
          <span class="modal-verse" id="1 Corinthians 6:9">1 Corinthians 6:9</span> ,
          <span class="modal-verse" id="1 Corinthians 16:13">16:13</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Women should be soft spoken</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 7:11">Proverbs 7:11</span> ,
          <span class="modal-verse" id="Proverbs 9:13">9:13</span> ,
          <span class="modal-verse" id="Titus 2:5">Titus 2:5</span> ,
          <span class="modal-verse" id="1 Peter 3:4">1 Peter 3:4</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="good-manners">GOOD MANNERS</h3>
  <ol>
    <li>
      <span class="main-li">Have Salt (savor)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Mark 9:50">Mark 9:50</span> ,
          <span class="modal-verse" id="Colossians 4:6">Colossians 4:6</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Be Courteous</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Peter 3:8">1 Peter 3:8</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Greet/Salute others (especially by name)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Psalm 2:12">Psalm 2:12</span> ,
          <span class="modal-verse" id="Matthew 10:12">Matthew 10:12</span> ,
          <span class="modal-verse" id="Luke 10:5">Luke 10:5</span> ,
          <span class="modal-verse" id="1 Corinthians 16:20">1 Corinthians 16:20</span> ,
          <span class="modal-verse" id="1 Thessalonians 5:26">1 Thessalonians 5:26</span> ,
          <span class="modal-verse" id="Philippians 4:21">Philippians 4:21</span> ,
          <span class="modal-verse" id="Hebrews 13:24">Hebrews 13:24</span> ,
          <span class="modal-verse" id="3 John 1:14">3 John 1:14</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Stand up when an elderly man walks in</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 19:32">Leviticus 19:32</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t be cruel to the disabled</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 19:14">Leviticus 19:14</span> ,
          <span class="modal-verse" id="Deuteronomy 27:18">Deuteronomy 27:18</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Help those in need</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 23:5">Exodus 23:5</span> ,
          <span class="modal-verse" id="Deuteronomy 22:4">Deuteronomy 22:4</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Visit the sick</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 25:36">Matthew 25:36</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Visit them in prison</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 25:36">Matthew 25:36</span> ,
          <span class="modal-verse" id="Hebrews 13:3">Hebrews 13:3</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t abuse hospitality</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 25:17">Proverbs 25:17</span> ,
          <span class="modal-verse" id="Matthew 10:11">Matthew 10:11</span> ,
          <span class="modal-verse" id="Mark 6:10">Mark 6:10</span> ,
          <span class="modal-verse" id="Luke 9:4">Luke 9:4</span> ,
          <span class="modal-verse" id="Luke 10:7">10:7</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="gratitude">GRATITUDE</h3>
  <ol>
    <li>
      <span class="main-li">In everything give thanks</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Chronicles 16:8">1 Chronicles 16:8</span> ,
          <span class="modal-verse" id="1 Chronicles 16:34">16:34</span> ,
          <span class="modal-verse" id="Psalm 30:4">Psalm 30:4</span> ,
          <span class="modal-verse" id="Psalm 50:14">50:14</span> ,
          <span class="modal-verse" id="Psalm 95:2">95:2</span> ,
          <span class="modal-verse" id="Psalm 97:12">97:12</span> ,
          <span class="modal-verse" id="Psalm 100:4">100:4</span> ,
          <span class="modal-verse" id="Psalm 105:1">105:1</span> ,
          <span class="modal-verse" id="Psalm 107:1">107:1</span> ,
          <span class="modal-verse" id="Psalm 147:7">147:7</span> ,
          <span class="modal-verse" id="1 Thessalonians 5:18">1 Thessalonians 5:18</span> ,
          <span class="modal-verse" id="Ephesians 5:4">Ephesians 5:4</span> ,
          <span class="modal-verse" id="Ephesians 5:20">5:20</span> ,
          <span class="modal-verse" id="Colossians 2:7">Colossians 2:7</span> ,
          <span class="modal-verse" id="Colossians 3:15">3:15</span> ,
          <span class="modal-verse" id="Colossians 3:17">3:17</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t complain, murmur or be ungrateful</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Numbers 11:1">Numbers 11:1</span> ,
          <span class="modal-verse" id="John 6:43">John 6:43</span> ,
          <span class="modal-verse" id="1 Corinthians 10:10">1 Corinthians 10:10</span> ,
          <span class="modal-verse" id="Philippians 2:14">Philippians 2:14</span> ,
          <span class="modal-verse" id="Ephesians 4:31">Ephesians 4:31</span>
        </li>
        <li>
          clamor-loud outcry; expression of discontent or protest
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="housing">HOUSING</h3>
  <ol>
    <li>
      <span class="main-li">And thou shalt write them upon the posts of thy house, and on thy gates (Display God’s Word throughout your house)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 6:9">Deuteronomy 6:9</span> ,
          <span class="modal-verse" id="Deuteronomy 11:20">11:20</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Build a battlement on your roof when constructing a house</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 22:8">Deuteronomy 22:8</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="humility-honor">HUMILITY/HONOR</h3>
  <ol>
    <li>
      <span class="main-li">Be humble (when you soberly esteem yourself low and another high)(pride is a sin)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 3:34">Proverbs 3:34</span> ,
          <span class="modal-verse" id="Proverbs 6:17">6:17</span> ,
          <span class="modal-verse" id="Proverbs 8:13">8:13</span> ,
          <span class="modal-verse" id="Proverbs 11:2">11:2</span> ,
          <span class="modal-verse" id="Proverbs 12:9">12:9</span> ,
          <span class="modal-verse" id="Proverbs 13:10">13:10</span> ,
          <span class="modal-verse" id="Proverbs 15:25">15:25</span> ,
          <span class="modal-verse" id="Proverbs 15:33">15:33</span> ,
          <span class="modal-verse" id="Proverbs 16:5">16:5</span> ,
          <span class="modal-verse" id="Proverbs 16:18-19">16:18-19</span> ,
          <span class="modal-verse" id="Proverbs 17:19">17:19</span> ,
          <span class="modal-verse" id="Proverbs 18:11-12">18:11-12</span> ,
          <span class="modal-verse" id="Proverbs 21:4">21:4</span> ,
          <span class="modal-verse" id="Proverbs 22:4">22:4</span> ,
          <span class="modal-verse" id="Proverbs 28:25">28:25</span> ,
          <span class="modal-verse" id="Proverbs 29:23">29:23</span> ,
          <span class="modal-verse" id="Proverbs 30:13">30:13</span> ,
          <span class="modal-verse" id="Isaiah 66:2">Isaiah 66:2</span> ,
          <span class="modal-verse" id="Micah 6:8">Micah 6:8</span> ,
          <span class="modal-verse" id="Mark 7:22">Mark 7:22</span> ,
          <span class="modal-verse" id="Romans 11:20">Romans 11:20</span> ,
          <span class="modal-verse" id="Romans 12:3">12:3</span> ,
          <span class="modal-verse" id="Romans 12:16">12:16</span> ,
          <span class="modal-verse" id="1 Corinthians 1:26-29">1 Corinthians 1:26-29</span> ,
          <span class="modal-verse" id="1 Corinthians 4:6">4:6</span> ,
          <span class="modal-verse" id="2 Corinthians 12:20">2 Corinthians 12:20</span> ,
          <span class="modal-verse" id="Ephesians 4:2">Ephesians 4:2</span> ,
          <span class="modal-verse" id="Philippians 2:3">Philippians 2:3</span> ,
          <span class="modal-verse" id="Philippians 2:5">2:5</span> ,
          <span class="modal-verse" id="Colossians 3:12">Colossians 3:12</span> ,
          <span class="modal-verse" id="James 4:6">James 4:6</span> ,
          <span class="modal-verse" id="James 4:10">4:10</span> ,
          <span class="modal-verse" id="1 Peter 5:5-6">1 Peter 5:5-6</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Be meek</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Zephaniah 2:3">Zephaniah 2:3</span> ,
          <span class="modal-verse" id="Galatians 5:23">Galatians 5:23</span> ,
          <span class="modal-verse" id="Ephesians 4:2">Ephesians 4:2</span> ,
          <span class="modal-verse" id="Colossians 3:12">Colossians 3:12</span> ,
          <span class="modal-verse" id="1 Timothy 6:11">1 Timothy 6:11</span> ,
          <span class="modal-verse" id="Titus 3:2">Titus 3:2</span> ,
          <span class="modal-verse" id="1 Peter 3:4">3:4</span> ,
          <span class="modal-verse" id="1 Peter 3:15">1 Peter 3:15</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Choose the lowest seat</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 25:6-7">Proverbs 25:6-7</span> ,
          <span class="modal-verse" id="Matthew 23:6">Matthew 23:6</span> ,
          <span class="modal-verse" id="Mark 12:39">Mark 12:39</span> ,
          <span class="modal-verse" id="Luke 11:43">Luke 11:43</span> ,
          <span class="modal-verse" id="Luke 14:8">14:8</span> ,
          <span class="modal-verse" id="Luke 14:10">14:10</span> ,
          <span class="modal-verse" id="Luke 20:46">20:46</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Say we are unprofitable servants (God isn’t bettered by us- only we and the people around us are profited: stay humble)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Luke 17:10">Luke 17:10</span>
        </li>
        <li>
          Honor, reverence, esteem highly
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Husband to wife</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Peter 3:7">1 Peter 3:7</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Wife to husband</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Ephesians 5:33">Ephesians 5:33</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Children to parents</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 20:12">Exodus 20:12</span> ,
          <span class="modal-verse" id="Deuteronomy 5:16">Deuteronomy 5:16</span> ,
          <span class="modal-verse" id="Deuteronomy 27:16">27:16</span> ,
          <span class="modal-verse" id="Proverbs 30:17">Proverbs 30:17</span> ,
          <span class="modal-verse" id="Ezekiel 22:7">Ezekiel 22:7</span> ,
          <span class="modal-verse" id="Matthew 15:4">Matthew 15:4</span> ,
          <span class="modal-verse" id="Matthew 19:19">19:19</span> ,
          <span class="modal-verse" id="Mark 7:10">Mark 7:10</span> ,
          <span class="modal-verse" id="Mark 10:19">10:19</span> ,
          <span class="modal-verse" id="Luke 18:20">Luke 18:20</span> ,
          <span class="modal-verse" id="Ephesians 6:2">Ephesians 6:2</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Servant to master</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Malachi 1:6">Malachi 1:6</span> ,
          <span class="modal-verse" id="1 Timothy 6:1">1 Timothy 6:1</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Citizens to the king</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Romans 13:7">Romans 13:7</span> ,
          <span class="modal-verse" id="1 Peter 2:17">1 Peter 2:17</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Believers to spiritual leader</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Philippians 2:29">Philippians 2:29</span> ,
          <span class="modal-verse" id="1 Corinthians 4:1">1 Corinthians 4:1</span> ,
          <span class="modal-verse" id="1 Thessalonians 5:12-13">1 Thessalonians 5:12-13</span> ,
          <span class="modal-verse" id="1 Timothy 5:17">1 Timothy 5:17</span> ,
          <span class="modal-verse" id="Hebrews 13:7">Hebrews 13:7</span> ,
          <span class="modal-verse" id="1 Timothy 4:12">1 Timothy 4:12</span> ,
          <span class="modal-verse" id="Titus 2:15">Titus 2:15</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Other believers (in general)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Romans 12:10">Romans 12:10</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Elderly</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Leviticus 19:32">Leviticus 19:32</span> ,
          <span class="modal-verse" id="1 Timothy 5:3">1 Timothy 5:3</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">All men (equal value as a person)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Titus 3:2">Titus 3:2</span> ,
          <span class="modal-verse" id="1 Peter 2:17">1 Peter 2:17</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Worship the Lord</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="2 Kings 17:36">2 Kings 17:36</span> ,
          <span class="modal-verse" id="Psalm 4:4">Psalm 4:4</span> ,
          <span class="modal-verse" id="Psalm 45:11">45:11</span> ,
          <span class="modal-verse" id="Psalm 96:9">96:9</span> ,
          <span class="modal-verse" id="Matthew 4:10">Matthew 4:10</span> ,
          <span class="modal-verse" id="Luke 4:8">Luke 4:8</span> ,
          <span class="modal-verse" id="Hebrews 12:28">Hebrews 12:28</span> ,
          <span class="modal-verse" id="Revelation 14:7">Revelation 14:7</span> ,
          <span class="modal-verse" id="Revelation 19:10">Revelation 19:10</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Sanctify the Lord</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Isaiah 8:13">Isaiah 8:13</span> ,
          <span class="modal-verse" id="1 Peter 3:15">1 Peter 3:15</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="joy">JOY</h3>
  <ol>
    <li>
      <span class="main-li">Rejoice in the Lord (always/evermore)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Chronicles 16:10">1 Chronicles 16:10</span> ,
          <span class="modal-verse" id="Psalm 2:11">Psalm 2:11</span> ,
          <span class="modal-verse" id="Psalm 5:11">5:11</span> ,
          <span class="modal-verse" id="Psalm 32:11">32:11</span> ,
          <span class="modal-verse" id="Psalm 33:1">33:1</span> ,
          <span class="modal-verse" id="Psalm 37:4">37:4</span> ,
          <span class="modal-verse" id="Psalm 40:16">40:16</span> ,
          <span class="modal-verse" id="Psalm 48:11">48:11</span> ,
          <span class="modal-verse" id="Psalm 67:4">67:4</span> ,
          <span class="modal-verse" id="Psalm 68:3-4">68:3-4</span> ,
          <span class="modal-verse" id="Psalm 70:4">70:4</span> ,
          <span class="modal-verse" id="Psalm 97:12">97:12</span> ,
          <span class="modal-verse" id="Psalm 118:12">118:12</span> ,
          <span class="modal-verse" id="Psalm 149:2">149:2</span> ,
          <span class="modal-verse" id="Psalm 149:5">149:5</span> ,
          <span class="modal-verse" id="Proverbs 15:13">Proverbs 15:13</span> ,
          <span class="modal-verse" id="Proverbs 15:15">15:15</span> ,
          <span class="modal-verse" id="Proverbs 17:22">17:22</span> ,
          <span class="modal-verse" id="Ecclesiastes 9:7">Ecclesiastes 9:7</span> ,
          <span class="modal-verse" id="Isaiah 65:18">Isaiah 65:18</span> ,
          <span class="modal-verse" id="Isaiah 66:10">66:10</span> ,
          <span class="modal-verse" id="Joel 2:23">Joel 2:23</span> ,
          <span class="modal-verse" id="Zephaniah 3:14">Zephaniah 3:14</span> ,
          <span class="modal-verse" id="Zechariah 2:10">Zechariah 2:10</span> ,
          <span class="modal-verse" id="Zechariah 9:9">9:9</span> ,
          <span class="modal-verse" id="Romans 12:8">Romans 12:8</span> ,
          <span class="modal-verse" id="1 Corinthians 13:11">1 Corinthians 13:11</span> ,
          <span class="modal-verse" id="Galatians 5:22">Galatians 5:22</span> ,
          <span class="modal-verse" id="Philippians 3:1">Philippians 3:1</span> ,
          <span class="modal-verse" id="Philippians 4:4">4:4</span> ,
          <span class="modal-verse" id="1 Thessalonians 5:16">1 Thessalonians 5:16</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">For your Salvation</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Luke 10:20">Luke 10:20</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">For rewards/blessings</span>
      <ul class="styled">
        <li>
          When tempted (tested to sin)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="James 1:2">James 1:2</span>
            </li>
          </ul>
        </li>
        <li>
          When persecuted for Christ’s sake
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 5:12">Matthew 5:12</span> ,
              <span class="modal-verse" id="Luke 6:23">Luke 6:23</span> ,
              <span class="modal-verse" id="John 16:33">John 16:33</span> ,
              <span class="modal-verse" id="Romans 12:12">Romans 12:12</span> ,
              <span class="modal-verse" id="1 Peter 3:14">1 Peter 3:14</span> ,
              <span class="modal-verse" id="1 Peter 4:12-13">4:12-13</span> ,
              <span class="modal-verse" id="1 Peter 4:16">4:16</span>
            </li>
          </ul>
        </li>
        <li>
          When exalted/made low
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Ecclesiastes 7:14">Ecclesiastes 7:14</span> ,
              <span class="modal-verse" id="James 1:9-10">James 1:9-10</span>
            </li>
          </ul>
        </li>
        <li>
          For hope of reward
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Jeremiah 31:16">Jeremiah 31:16</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Rejoice not; sorrow; mourn (because of sin)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Jeremiah 6:26">Jeremiah 6:26</span> ,
          <span class="modal-verse" id="Hosea 9:1">Hosea 9:1</span> ,
          <span class="modal-verse" id="Joel 1:5">Joel 1:5</span> ,
          <span class="modal-verse" id="Joel 1:11">1:11</span> ,
          <span class="modal-verse" id="Joel 1:13">1:13</span> ,
          <span class="modal-verse" id="Joel 2:12-13">2:12-13</span> ,
          <span class="modal-verse" id="James 4:9">James 4:9</span> ,
          <span class="modal-verse" id="James 4:16">4:16</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Be happy for others (when good things happen) or sad (when bad)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Job 6:14">Job 6:14</span> ,
          <span class="modal-verse" id="Proverbs 17:5">Proverbs 17:5</span> ,
          <span class="modal-verse" id="Romans 12:15">Romans 12:15</span> ,
          <span class="modal-verse" id="Hebrews 13:3">Hebrews 13:3</span> ,
          <span class="modal-verse" id="1 Peter 3:8">1 Peter 3:8</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="justice-equity-civil-moral">JUSTICE AND EQUITY (CIVIL & MORAL)</h3>
  <ol>
    <li>
      <span class="main-li">Judge righteous judgement</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 23:7">Exodus 23:7</span> ,
          <span class="modal-verse" id="Leviticus 19:15">Leviticus 19:15</span> ,
          <span class="modal-verse" id="Leviticus 19:35">19:35</span> ,
          <span class="modal-verse" id="Deuteronomy 1:16">Deuteronomy 1:16</span> ,
          <span class="modal-verse" id="Deuteronomy 16:18-20">16:18-20</span> ,
          <span class="modal-verse" id="Deuteronomy 24:17">24:17</span> ,
          <span class="modal-verse" id="Deuteronomy 25:1">25:1</span> ,
          <span class="modal-verse" id="Deuteronomy 27:19">27:19</span> ,
          <span class="modal-verse" id="Proverbs 17:15">Proverbs 17:15</span> ,
          <span class="modal-verse" id="Proverbs 17:26">17:26</span> ,
          <span class="modal-verse" id="Proverbs 18:5">18:5</span> ,
          <span class="modal-verse" id="Proverbs 29:4">29:4</span> ,
          <span class="modal-verse" id="Proverbs 31:8-9">31:8-9</span> ,
          <span class="modal-verse" id="Jeremiah 7:5-6">Jeremiah 7:5-6</span> ,
          <span class="modal-verse" id="Jeremiah 22:3">22:3</span> ,
          <span class="modal-verse" id="Ezekiel 18:8">Ezekiel 18:8</span> ,
          <span class="modal-verse" id="Ezekiel 45:9">45:9</span> ,
          <span class="modal-verse" id="Hosea 12:6">Hosea 12:6</span> ,
          <span class="modal-verse" id="Micah 6:8">Micah 6:8</span> ,
          <span class="modal-verse" id="Zechariah 8:16">Zechariah 8:16</span> ,
          <span class="modal-verse" id="John 7:24">John 7:24</span> ,
          <span class="modal-verse" id="Titus 1:8">Titus 1:8</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Thou shalt not respect persons (equality) (poor/ mighty/ rich/ stranger)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 1:17">Deuteronomy 1:17</span> ,
          <span class="modal-verse" id="Deuteronomy 16:19">16:19</span> ,
          <span class="modal-verse" id="Proverbs 18:5">Proverbs 18:5</span> ,
          <span class="modal-verse" id="Proverbs 24:23">24:23</span> ,
          <span class="modal-verse" id="Proverbs 28:21">28:21</span> ,
          <span class="modal-verse" id="Ephesians 6:9">Ephesians 6:9</span> ,
          <span class="modal-verse" id="Colossians 4:1">Colossians 4:1</span> ,
          <span class="modal-verse" id="1 Timothy 5:21">1 Timothy 5:21</span> ,
          <span class="modal-verse" id="Titus 1:8">Titus 1:8</span> ,
          <span class="modal-verse" id="James 2:1">James 2:1</span> ,
          <span class="modal-verse" id="James 2:9">2:9</span>
          <ul class="sub">
            <li>
              Poor/Rich
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Exodus 23:3">Exodus 23:3</span> ,
                  <span class="modal-verse" id="Leviticus 19:15">Leviticus 19:15</span> ,
                  <span class="modal-verse" id="Proverbs 29:7">Proverbs 29:7</span> ,
                  <span class="modal-verse" id="Proverbs 29:14">29:14</span> ,
                  <span class="modal-verse" id="Isaiah 10:2">Isaiah 10:2</span> ,
                  <span class="modal-verse" id="Zechariah 7:10">Zechariah 7:10</span> ,
                  <span class="modal-verse" id="James 2:2-4">James 2:2-4</span>
                </li>
              </ul>
            </li>
            <li>
              Small/Great
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Deuteronomy 1:17">Deuteronomy 1:17</span> ,
                  <span class="modal-verse" id="Proverbs 17:26">Proverbs 17:26</span>
                </li>
              </ul>
            </li>
            <li>
              Stranger/Brethren (applicable to race/ethnicity)
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Exodus 12:48-49">Exodus 12:48-49</span> ,
                  <span class="modal-verse" id="Exodus 22:21">22:21</span> ,
                  <span class="modal-verse" id="Exodus 23:9">23:9</span> ,
                  <span class="modal-verse" id="Leviticus 19:33-34">Leviticus 19:33-34</span> ,
                  <span class="modal-verse" id="Leviticus 24:22">24:22</span> ,
                  <span class="modal-verse" id="Numbers 15:15-16">Numbers 15:15-16</span> ,
                  <span class="modal-verse" id="Deuteronomy 27:19">Deuteronomy 27:19</span> ,
                  <span class="modal-verse" id="Jeremiah 7:6">Jeremiah 7:6</span> ,
                  <span class="modal-verse" id="Ezekiel 22:7">Ezekiel 22:7</span> ,
                  <span class="modal-verse" id="Zechariah 7:10">Zechariah 7:10</span> ,
                  <span class="modal-verse" id="Malachi 3:5 ">Malachi 3:5 </span>
                </li>
              </ul>
            </li>
            <li>
              Widow/Fatherless
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Exodus 22:22">Exodus 22:22</span> ,
                  <span class="modal-verse" id="Deuteronomy 27:19">Deuteronomy 27:19</span> ,
                  <span class="modal-verse" id="Isaiah 1:17">Isaiah 1:17</span> ,
                  <span class="modal-verse" id="Isaiah 10:2">10:2</span> ,
                  <span class="modal-verse" id="Jeremiah 7:6">Jeremiah 7:6</span> ,
                  <span class="modal-verse" id="Ezekiel 22:7">Ezekiel 22:7</span> ,
                  <span class="modal-verse" id="Zachariah 7:10">Zachariah 7:10</span> ,
                  <span class="modal-verse" id="Malachi 3:5">Malachi 3:5</span> ,
                  <span class="modal-verse" id="Matthew 23:14">Matthew 23:14</span> ,
                  <span class="modal-verse" id="Mark 12:40">Mark 12:40</span> ,
                  <span class="modal-verse" id="Luke 20:47">Luke 20:47</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t receive bribes (money that corrupts judgment)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 23:8">Exodus 23:8</span> ,
          <span class="modal-verse" id="Deuteronomy 16:19">Deuteronomy 16:19</span> ,
          <span class="modal-verse" id="Psalm 15:5">Psalm 15:5</span> ,
          <span class="modal-verse" id="Proverbs 15:27">Proverbs 15:27</span> ,
          <span class="modal-verse" id="Proverbs 17:23">17:23</span> ,
          <span class="modal-verse" id="Proverbs 29:4">29:4</span> ,
          <span class="modal-verse" id="Ezekiel 22:12">Ezekiel 22:12</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Receive not an accusation but before two or three witnesses</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Timothy 5:19">1 Timothy 5:19</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">One is punished for his own sin (not for another person’s)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 24:16">Deuteronomy 24:16</span> ,
          <span class="modal-verse" id="2 Kings 14:6">2 Kings 14:6</span> ,
          <span class="modal-verse" id="2 Chronicles 25:4">2 Chronicles 25:4</span> ,
          <span class="modal-verse" id="Ezekiel 18:18-20">Ezekiel 18:18-20</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Don’t twist judgment to follow the crowd</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 23:2">Exodus 23:2</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="love-hate">LOVE & HATE</h3>
  <ol>
    <li>
      <span class="main-li">Love God</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 6:5">Deuteronomy 6:5</span> ,
          <span class="modal-verse" id="Deuteronomy 10:12">10:12</span> ,
          <span class="modal-verse" id="Deuteronomy 10:20">10:20</span> ,
          <span class="modal-verse" id="Deuteronomy 11:1">11:1</span> ,
          <span class="modal-verse" id="Deuteronomy 13:22">13:22</span> ,
          <span class="modal-verse" id="Deuteronomy 30:16">30:16</span> ,
          <span class="modal-verse" id="Deuteronomy 30:20">30:20</span> ,
          <span class="modal-verse" id="Joshua 22:5">Joshua 22:5</span> ,
          <span class="modal-verse" id="Joshua 23:11">23:11</span> ,
          <span class="modal-verse" id="Psalm 17:15">Psalm 17:15</span> ,
          <span class="modal-verse" id="Psalm 18:1">18:1</span> ,
          <span class="modal-verse" id="Psalm 31:23">31:23</span> ,
          <span class="modal-verse" id="Psalm 40:8">40:8</span> ,
          <span class="modal-verse" id="Psalm 42:1-3">42:1-3</span> ,
          <span class="modal-verse" id="Psalm 57:7">57:7</span> ,
          <span class="modal-verse" id="Psalm 63:1-2">63:1-2</span> ,
          <span class="modal-verse" id="Psalm 73:25">73:25</span> ,
          <span class="modal-verse" id="Psalm 89:16">89:16</span> ,
          <span class="modal-verse" id="Psalm 100:2">100:2</span> ,
          <span class="modal-verse" id="Psalm 105:3">105:3</span> ,
          <span class="modal-verse" id="Psalm 143:6">143:6</span> ,
          <span class="modal-verse" id="Proverbs 8:17">Proverbs 8:17</span> ,
          <span class="modal-verse" id="Matthew 22:37-38">Matthew 22:37-38</span> ,
          <span class="modal-verse" id="Mark 12:30">Mark 12:30</span> ,
          <span class="modal-verse" id="Luke 10:27">Luke 10:27</span> ,
          <span class="modal-verse" id="Luke 11:42">11:42</span> ,
          <span class="modal-verse" id="Colossians 3:2">Colossians 3:2</span> ,
          <span class="modal-verse" id="Jude 1:21">Jude 1:21</span>
        </li>
        <li>
          In comparison to loving God: hate father, mother, wife, children, brethren, sisters, and your own life
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Luke 14:26">Luke 14:26</span> ,
              <span class="modal-verse" id="Matthew 10:37">Matthew 10:37</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Love good (righteousness), hate evil (sin)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Psalm 11:5">Psalm 11:5</span> ,
          <span class="modal-verse" id="Psalm 97:10">97:10</span> ,
          <span class="modal-verse" id="Psalm 101:3">101:3</span> ,
          <span class="modal-verse" id="Proverbs 6:18">Proverbs 6:18</span> ,
          <span class="modal-verse" id="Proverbs 8:13">8:13</span> ,
          <span class="modal-verse" id="Proverbs 10:23">10:23</span> ,
          <span class="modal-verse" id="Proverbs 13:5">13:5</span> ,
          <span class="modal-verse" id="Proverbs 14:9">14:9</span> ,
          <span class="modal-verse" id="Proverbs 15:10">15:10</span> ,
          <span class="modal-verse" id="Proverbs 21:10">21:10</span> ,
          <span class="modal-verse" id="Proverbs 21:15">21:15</span> ,
          <span class="modal-verse" id="Proverbs 27:3">27:3</span> ,
          <span class="modal-verse" id="Proverbs 28:16">28:16</span> ,
          <span class="modal-verse" id="Amos 5:14-15">Amos 5:14-15</span> ,
          <span class="modal-verse" id="Micah 6:8">Micah 6:8</span> ,
          <span class="modal-verse" id="Zephaniah 2:3">Zephaniah 2:3</span> ,
          <span class="modal-verse" id="Matthew 5:6">Matthew 5:6</span> ,
          <span class="modal-verse" id="Romans 12:9">Romans 12:9</span> ,
          <span class="modal-verse" id="Ephesians 5:11">Ephesians 5:11</span> ,
          <span class="modal-verse" id="Hebrews 1:9">Hebrews 1:9</span> ,
          <span class="modal-verse" id="3 John 1:11">3 John 1:11</span> ,
          <span class="modal-verse" id="Revelation 3:19">Revelation 3:19</span>
        </li>
        <li>
          Thy law do I love/longing after at all times/stick (cleave) unto them/run/make haste/delay not/ pant for thy word/Lift up your voice for/seek as for hid treasures.
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Chronicles 28:8-9">1 Chronicles 28:8-9</span> ,
              <span class="modal-verse" id="Psalm 1:2">Psalm 1:2</span> ,
              <span class="modal-verse" id="Psalm 40:8">40:8</span> ,
              <span class="modal-verse" id="Psalm 119:16">119:16</span> ,
              <span class="modal-verse" id="Psalm 119:20">119:20</span> ,
              <span class="modal-verse" id="Psalm 119:24">119:24</span> ,
              <span class="modal-verse" id="Psalm 119:31">119:31</span> ,
              <span class="modal-verse" id="Psalm 119:32">119:32</span> ,
              <span class="modal-verse" id="Psalm 119:35">119:35</span> ,
              <span class="modal-verse" id="Psalm 119:40">119:40</span> ,
              <span class="modal-verse" id="Psalm 119:60">119:60</span> ,
              <span class="modal-verse" id="Psalm 119:70">119:70</span> ,
              <span class="modal-verse" id="Psalm 119:72">119:72</span> ,
              <span class="modal-verse" id="Psalm 119:77">119:77</span> ,
              <span class="modal-verse" id="Psalm 119:97">119:97</span> ,
              <span class="modal-verse" id="Psalm 119:103">119:103</span> ,
              <span class="modal-verse" id="Psalm 119:111">119:111</span> ,
              <span class="modal-verse" id="Psalm 119:113">119:113</span> ,
              <span class="modal-verse" id="Psalm 119:131">119:131</span> ,
              <span class="modal-verse" id="Psalm 119:136">119:136</span> ,
              <span class="modal-verse" id="Psalm 119:140">119:140</span> ,
              <span class="modal-verse" id="Psalm 119:143">119:143</span> ,
              <span class="modal-verse" id="Psalm 119:161">119:161</span> ,
              <span class="modal-verse" id="Psalm 119:167">119:167</span> ,
              <span class="modal-verse" id="Psalm 119:174">119:174</span> ,
              <span class="modal-verse" id="Proverbs 1:7">Proverbs 1:7</span> ,
              <span class="modal-verse" id="Proverbs 1:22">1:22</span> ,
              <span class="modal-verse" id="Proverbs 2:1-4">2:1-4</span> ,
              <span class="modal-verse" id="Proverbs 2:10">2:10</span> ,
              <span class="modal-verse" id="Proverbs 3:15">3:15</span> ,
              <span class="modal-verse" id="Proverbs 4:5-8">4:5-8</span> ,
              <span class="modal-verse" id="Proverbs 7:1-4">7:1-4</span> ,
              <span class="modal-verse" id="Proverbs 12:1">12:1</span> ,
              <span class="modal-verse" id="Proverbs 15:21">15:21</span> ,
              <span class="modal-verse" id="Proverbs 18:2">18:2</span> ,
              <span class="modal-verse" id="Ezekiel 22:8">Ezekiel 22:8</span> ,
              <span class="modal-verse" id="1 Thessalonians 5:20">1 Thessalonians 5:20</span> ,
              <span class="modal-verse" id="Hebrews 13:22">Hebrews 13:22</span> ,
              <span class="modal-verse" id="1 Peter 2:2">1 Peter 2:2</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Thou shalt not covet: Be content: Love not the world, neither the things in the world</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Exodus 20:17">Exodus 20:17</span> ,
          <span class="modal-verse" id="Deuteronomy 5:21">Deuteronomy 5:21</span> ,
          <span class="modal-verse" id="Job 31:25">Job 31:25</span> ,
          <span class="modal-verse" id="Proverbs 15:27">Proverbs 15:27</span> ,
          <span class="modal-verse" id="Proverbs 27:20">27:20</span> ,
          <span class="modal-verse" id="Proverbs 28:20">28:20</span> ,
          <span class="modal-verse" id="Proverbs 28:22">28:22</span> ,
          <span class="modal-verse" id="Proverbs 30:8">30:8</span> ,
          <span class="modal-verse" id="Proverbs 30:15-16">30:15-16</span> ,
          <span class="modal-verse" id="Mark 7:22">Mark 7:22</span> ,
          <span class="modal-verse" id="Luke 3:14">Luke 3:14</span> ,
          <span class="modal-verse" id="Luke 12:15">12:15</span> ,
          <span class="modal-verse" id="Romans 7:7">Romans 7:7</span> ,
          <span class="modal-verse" id="Romans 13:9">13:9</span> ,
          <span class="modal-verse" id="1 Corinthians 6:10">1 Corinthians 6:10</span> ,
          <span class="modal-verse" id="1 Corinthians 10:6">10:6</span> ,
          <span class="modal-verse" id="Ephesians 5:3">Ephesians 5:3</span> ,
          <span class="modal-verse" id="Philippians 4:11-12">Philippians 4:11-12</span> ,
          <span class="modal-verse" id="Colossians 3:2">Colossians 3:2</span> ,
          <span class="modal-verse" id="Colossians 3:5">3:5</span> ,
          <span class="modal-verse" id="1 Timothy 3:3">1 Timothy 3:3</span> ,
          <span class="modal-verse" id="1 Timothy 3:8">8:3</span> ,
          <span class="modal-verse" id="1 Timothy 6:5-11">6:5-11</span> ,
          <span class="modal-verse" id="2 Timothy 2:4">2 Timothy 2:4</span> ,
          <span class="modal-verse" id="2 Timothy 2:22">2:22</span> ,
          <span class="modal-verse" id="Titus 1:7">Titus 1:7</span> ,
          <span class="modal-verse" id="Titus 2:12">2:12</span> ,
          <span class="modal-verse" id="Hebrews 13:5">Hebrews 13:5</span> ,
          <span class="modal-verse" id="James 5:1">James 5:1</span> ,
          <span class="modal-verse" id="1 Peter 2:11">1 Peter 2:11</span> ,
          <span class="modal-verse" id="1 Peter 4:2">4:2</span> ,
          <span class="modal-verse" id="1 Peter 5:2">5:2</span> ,
          <span class="modal-verse" id="1 John 2:15-17">1 John 2:15-17</span> ,
          <span class="modal-verse" id="James 4:4">James 4:4</span> ,
          <span class="modal-verse" id="2 Timothy 3:4">2 Timothy 3:4</span> ,
          <span class="modal-verse" id="2 Timothy 4:10">4:10</span>
        <li>
          Envy
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Psalm 37:1">Psalm 37:1</span> ,
              <span class="modal-verse" id="Proverbs 3:31">Proverbs 3:31</span> ,
              <span class="modal-verse" id="Proverbs 14:30">14:30</span> ,
              <span class="modal-verse" id="Proverbs 23:17">23:17</span> ,
              <span class="modal-verse" id="Proverbs 24:1">24:1</span> ,
              <span class="modal-verse" id="Proverbs 24:19">24:19</span> ,
              <span class="modal-verse" id="Proverbs 27:4">27:4</span> ,
              <span class="modal-verse" id="Romans 1:29">Romans 1:29</span> ,
              <span class="modal-verse" id="Romans 13:13">13:13</span> ,
              <span class="modal-verse" id="1 Corinthians 13:4">1 Corinthians 13:4</span> ,
              <span class="modal-verse" id="2 Corinthians 12:20">2 Corinthians 12:20</span> ,
              <span class="modal-verse" id="Galatians 5:20-21">Galatians 5:20-21</span> ,
              <span class="modal-verse" id="Galatians 5:26">5:26</span> ,
              <span class="modal-verse" id="1 Peter 2:1">1 Peter 2:1</span>
            </li>
          </ul>
        </li>
        <li>
          Let us not be desirous of vain glory
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Galatians 5:26">Galatians 5:26</span> ,
              <span class="modal-verse" id="Philippians 2:3">Philippians 2:3</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t lust after strange women (for fornication or adultery)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 20:17">Exodus 20:17</span> ,
              <span class="modal-verse" id="Deuteronomy 5:21">Deuteronomy 5:21</span> ,
              <span class="modal-verse" id="Proverbs 5:19-21">Proverbs 5:19-21</span> ,
              <span class="modal-verse" id="Proverbs 6:25">6:25</span> ,
              <span class="modal-verse" id="Matthew 5:28">Matthew 5:28</span> ,
              <span class="modal-verse" id="Galatians 5:19">Galatians 5:19</span> ,
              <span class="modal-verse" id="Colossians 3:5">Colossians 3:5</span> ,
              <span class="modal-verse" id="1 Thessalonians 4:5">1 Thessalonians 4:5</span>
            </li>
          </ul>
        </li>
        <li>
          Deny self (don’t live for worldly pleasures)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 21:17">Proverbs 21:17</span> ,
              <span class="modal-verse" id="Matthew 16:24">Matthew 16:24</span> ,
              <span class="modal-verse" id="Mark 8:34">Mark 8:34</span> ,
              <span class="modal-verse" id="Luke 9:23">Luke 9:23</span> ,
              <span class="modal-verse" id="Romans 15:1">Romans 15:1</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Love others (everybody except haters of God)(saved/unsaved; physical family/strangers; those that hate you/those that love you)</span>
      <ul class="styled">
        <li>
          Brethren
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 19:17">Leviticus 19:17</span> ,
              <span class="modal-verse" id="Deuteronomy 23:7">Deuteronomy 23:7</span> ,
              <span class="modal-verse" id="Zechariah 7:10">Zechariah 7:10</span> ,
              <span class="modal-verse" id="John 13:14-15">John 13:14-15</span> (example),
              <span class="modal-verse" id="John 13:34-35">13:34-35</span> ,
              <span class="modal-verse" id="John 15:9">15:9</span> ,
              <span class="modal-verse" id="John 15:12">15:12</span> ,
              <span class="modal-verse" id="John 15:17">15:17</span> ,
              <span class="modal-verse" id="Romans 12:10">Romans 12:10</span> ,
              <span class="modal-verse" id="Romans 13:8">13:8</span> ,
              <span class="modal-verse" id="1 Corinthians 16:14">1 Corinthians 16:14</span> ,
              <span class="modal-verse" id="2 Corinthians 6:13">2 Corinthians 6:13</span> ,
              <span class="modal-verse" id="2 Corinthians 9:7">9:7</span> ,
              <span class="modal-verse" id="Galatians 6:10">Galatians 6:10</span> ,
              <span class="modal-verse" id="Ephesians 4:2">Ephesians 4:2</span> ,
              <span class="modal-verse" id="1 Timothy 6:2">1 Timothy 6:2</span> ,
              <span class="modal-verse" id="Hebrews 13:1">Hebrews 13:1</span> ,
              <span class="modal-verse" id="Hebrews 10:24">10:24</span> ,
              <span class="modal-verse" id="1 Peter 1:22">1 Peter 1:22</span> ,
              <span class="modal-verse" id="1 Peter 2:1">2:1</span> ,
              <span class="modal-verse" id="1 Peter 2:17">2:17</span> ,
              <span class="modal-verse" id="1 Peter 3:8">3:8</span> ,
              <span class="modal-verse" id="1 John 3:11">1 John 3:11</span> ,
              <span class="modal-verse" id="1 John 3:16-18">3:16-18</span> ,
              <span class="modal-verse" id="1 John 3:23">3:23</span> ,
              <span class="modal-verse" id="1 John 4:7">4:7</span> ,
              <span class="modal-verse" id="1 John 4:11">4:11</span> ,
              <span class="modal-verse" id="1 John 4:21">4:21</span> ,
              <span class="modal-verse" id="2 John 1:5">2 John 1:5</span>
            </li>
          </ul>
        </li>
        <li>
          Unsaved
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Corinthians 10:33">1 Corinthians 10:33</span> ,
              <span class="modal-verse" id="Galatians 6:10">Galatians 6:10</span> ,
              <span class="modal-verse" id="3 John 1:5">3 John 1:5</span>
            </li>
          </ul>
        </li>
        <li>
          Family
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 11:29">Proverbs 11:29</span> ,
              <span class="modal-verse" id="Proverbs 15:17">15:17</span> ,
              <span class="modal-verse" id="Proverbs 15:20">15:20</span> ,
              <span class="modal-verse" id="Proverbs 23:22">23:22</span> ,
              <span class="modal-verse" id="Ephesians 5:25">Ephesians 5:25</span> ,
              <span class="modal-verse" id="Ephesians 5:28">5:28</span> ,
              <span class="modal-verse" id="Ephesians 5:33">5:33</span> ,
              <span class="modal-verse" id="Colossians 3:19">Colossians 3:19</span> ,
              <span class="modal-verse" id="Titus 2:4">Titus 2:4</span>
            </li>
          </ul>
        </li>
        <li>
          Stranger
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 19:34">Leviticus 19:34</span> ,
              <span class="modal-verse" id="Deuteronomy 10:19">Deuteronomy 10:19</span> ,
              <span class="modal-verse" id="Deuteronomy 23:7">23:7</span> ,
              <span class="modal-verse" id="Matthew 25:35">Matthew 25:35</span>
            </li>
          </ul>
        </li>
        <li>
          Enemy
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 23:4-5">Exodus 23:4-5</span> ,
              <span class="modal-verse" id="Job 31:29-31">Job 31:29-31</span> ,
              <span class="modal-verse" id="Proverbs 24:17-18">Proverbs 24:17-18</span> ,
              <span class="modal-verse" id="Matthew 5:44">Matthew 5:44</span> ,
              <span class="modal-verse" id="Luke 6:27">Luke 6:27</span> ,
              <span class="modal-verse" id="Luke 6:35">6:35</span> ,
              <span class="modal-verse" id="Romans 12:21">Romans 12:21</span>
            </li>
          </ul>
        </li>
        <li>
          Friend
          <ul class="sub">
            <li>
              <span class="modal-verse" id="John 15:13">John 15:13</span>
            </li>
          </ul>
        </li>
        <li>
          Children
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 18:10">Matthew 18:10</span> ,
              <span class="modal-verse" id="Mark 10:14">Mark 10:14</span> ,
              <span class="modal-verse" id="Luke 18:16">Luke 18:16</span>
            </li>
          </ul>
        </li>
        <li>
          Neighbor (all)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 19:18">Leviticus 19:18</span> ,
              <span class="modal-verse" id="Proverbs 3:29">Proverbs 3:29</span> ,
              <span class="modal-verse" id="Proverbs 11:12">11:12</span> ,
              <span class="modal-verse" id="Proverbs 14:21">14:21</span> ,
              <span class="modal-verse" id="Hosea 12:6">Hosea 12:6</span> ,
              <span class="modal-verse" id="Zechariah 8:17">Zechariah 8:17</span> ,
              <span class="modal-verse" id="Matthew 19:19">Matthew 19:19</span> ,
              <span class="modal-verse" id="Mark 12:31">Mark 12:31</span> ,
              <span class="modal-verse" id="Romans 13:9">Romans 13:9</span> ,
              <span class="modal-verse" id="1 Corinthians 10:24">1 Corinthians 10:24</span> ,
              <span class="modal-verse" id="Galatians 5:14">Galatians 5:14</span> ,
              <span class="modal-verse" id="Galatians 5:20">5:20</span> ,
              <span class="modal-verse" id="Galatians 5:22">5:22</span> ,
              <span class="modal-verse" id="Galatians 6:10">6:10</span> ,
              <span class="modal-verse" id="Ephesians 5:2">Ephesians 5:2</span> ,
              <span class="modal-verse" id="Ephesians 6:7">6:7</span> ,
              <span class="modal-verse" id="Philippians 2:4">Philippians 2:4</span> ,
              <span class="modal-verse" id="1 Thessalonians 5:8">1 Thessalonians 5:8</span> ,
              <span class="modal-verse" id="1 Timothy 6:11">1 Timothy 6:11</span> ,
              <span class="modal-verse" id="Titus 1:8">Titus 1:8</span> ,
              <span class="modal-verse" id="James 2:8">James 2:8</span> ,
              <span class="modal-verse" id="James 2:12">2:12</span>
            </li>
          </ul>
        </li>
        <li>
          Orphan/widow
          <ul class="sub">
            <li>
              <span class="modal-verse" id="James 1:27">James 1:27</span>
            </li>
          </ul>
        </li>
        <li>
          Charity
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Corinthians 13:1-13">1 Corinthians 13:1-13</span> ,
              <span class="modal-verse" id="1 Corinthians 14:1">14:1</span> ,
              <span class="modal-verse" id="1 Corinthians 16:14">16:14</span> ,
              <span class="modal-verse" id="Colossians 3:14">Colossians 3:14</span> ,
              <span class="modal-verse" id="2 Timothy 2:22">2 Timothy 2:22</span> ,
              <span class="modal-verse" id="Titus 2:2">Titus 2:2</span> ,
              <span class="modal-verse" id="1 Peter 4:8">1 Peter 4:8</span> ,
              <span class="modal-verse" id="2 Peter 1:7">2 Peter 1:7</span>
            </li>
          </ul>
        </li>
        <li>
          External
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 7:12">Matthew 7:12</span> ,
              <span class="modal-verse" id="Matthew 22:39-40">22:39-40</span> ,
              <span class="modal-verse" id="Luke 6:31">Luke 6:31</span> ,
              <span class="modal-verse" id="Luke 6:36">6:36</span> ,
              <span class="modal-verse" id="Romans 15:1">Romans 15:1</span> ,
              <span class="modal-verse" id="Galatians 5:13">Galatians 5:13</span> ,
              <span class="modal-verse" id="Colossians 3:12">Colossians 3:12</span> ,
              <span class="modal-verse" id="2 Peter 1:7">2 Peter 1:7</span>
            </li>
          </ul>
        </li>
        <li>
          Internal
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Ephesians 4:32">Ephesians 4:32</span> ,
              <span class="modal-verse" id="Titus 2:7">Titus 2:7</span>
            </li>
          </ul>
        </li>
        <li>
          Internal
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Ephesians 4:32">Ephesians 4:32</span> ,
              <span class="modal-verse" id="Titus 2:7">Titus 2:7</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Do good especially to the household of faith</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Galatians 6:10">Galatians 6:10</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Hate haters of God; don’t help the ungodly</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 13:8">Deuteronomy 13:8</span> ,
          <span class="modal-verse" id="Deuteronomy 19:13">19:13</span> ,
          <span class="modal-verse" id="Deuteronomy 19:21">19:21</span> ,
          <span class="modal-verse" id="Judges 5:31">Judges 5:31</span> ,
          <span class="modal-verse" id="2 Chronicles 19:2">2 Chronicles 19:2</span> ,
          <span class="modal-verse" id="Psalm 15:4">Psalm 15:4</span> ,
          <span class="modal-verse" id="Psalm 26:5">26:5</span> ,
          <span class="modal-verse" id="Psalm 31:6">31:6</span> ,
          <span class="modal-verse" id="Psalm 40:4">40:4</span> ,
          <span class="modal-verse" id="Psalm 139:21-22">139:21-22</span> ,
          <span class="modal-verse" id="Proverbs 28:4">Proverbs 28:4</span> ,
          <span class="modal-verse" id="Proverbs 29:27">29:27</span> ,
          <span class="modal-verse" id="1 Corinthians 16:22">1 Corinthians 16:22</span> ,
          <span class="modal-verse" id="Revelation 2:2">Revelation 2:2</span>
        </li>
        <li>
          Let them alone (do not help/appease them)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 15:14">Matthew 15:14</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="money">MONEY (<span class="modal-verse" id="Proverbs 3:9">PROVERBS 3:9</span>)</h3>
  <ol>
    <li>
      <span class="main-li">Possessions</span>
      <ul class="styled">
        <li>
          Remember God (that He gives me the power to get wealth)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 6:12">Deuteronomy 6:12</span> ,
              <span class="modal-verse" id="Deuteronomy 8:2">8:2</span> ,
              <span class="modal-verse" id="Deuteronomy 8:11">8:11</span> ,
              <span class="modal-verse" id="Deuteronomy 8:18">8:18</span> ,
              <span class="modal-verse" id="1 Timothy 6:17">1 Timothy 6:17</span>
            </li>
          </ul>
        </li>
        <li>
          Know the state of your flock (budget/assessment; don’t waste your resources)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 12:27">Proverbs 12:27</span> ,
              <span class="modal-verse" id="Proverbs 14:4">14:4</span> ,
              <span class="modal-verse" id="Proverbs 18:9">18:9</span> ,
              <span class="modal-verse" id="Proverbs 27:23-27">27:23-27</span> ,
              <span class="modal-verse" id="John 6:12">John 6:12</span>
            </li>
          </ul>
        </li>
        <li>
          Lay not for yourselves treasures upon the earth, nor greatly multiply your silver and gold (or horses: possessions)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 17:16-17">Deuteronomy 17:16-17</span> (for kings),
              <span class="modal-verse" id="Proverbs 23:4-5">Proverbs 23:4-5</span> ,
              <span class="modal-verse" id="Matthew 6:19">Matthew 6:19</span> ,
              <span class="modal-verse" id="Matthew 6:24">6:24</span> ,
              <span class="modal-verse" id="Luke 12:21">Luke 12:21</span> ,
              <span class="modal-verse" id="Luke 14:33">14:33</span> ,
              <span class="modal-verse" id="Luke 16:13">16:13</span> ,
              <span class="modal-verse" id="Proverbs 11:26">Proverbs 11:26</span>
            </li>
            <li>
              Note: “lay up” means to store; put out of active service; or collect
            </li>
          </ul>
        </li>
        <li>
          Have a purse (wallet)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Luke 22:35-36">Luke 22:35-36</span>
            </li>
          </ul>
        </li>
        <li>
          Have a scrip (bag for possessions)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Luke 22:35-36">Luke 22:35-36</span>
            </li>
          </ul>
        </li>
        <li>
          Leave an inheritance
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 13:22">Proverbs 13:22</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Debt</span>
      <ul class="styled">
        <li>
          Pay your debts
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Psalm 37:21">Psalm 37:21</span> ,
              <span class="modal-verse" id="Romans 13:8">Romans 13:8</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Provide physical needs (food, water, shelter, clothing)</span>
      <ul class="styled">
        <li>
          Husbands to the wife/family
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Genesis 3:17-19">Genesis 3:17-19</span> ,
              <span class="modal-verse" id="Exodus 21:10">Exodus 21:10</span> ,
              <span class="modal-verse" id="Ephesians 5:28-29">Ephesians 5:28-29</span> ,
              <span class="modal-verse" id="1 Timothy 5:8">1 Timothy 5:8</span> ,
              <span class="modal-verse" id="1 Timothy 5:16">5:16</span>
            </li>
          </ul>
        </li>
        <li>
          Children/grandchildren repay your parents
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 15:5-6">Matthew 15:5-6</span> ,
              <span class="modal-verse" id="Mark 7:11-12">Mark 7:11-12</span> ,
              <span class="modal-verse" id="John 19:26-27">John 19:26-27</span> ,
              <span class="modal-verse" id="1 Timothy 5:4">1 Timothy 5:4</span> ,
              <span class="modal-verse" id="1 Timothy 5:16">5:16</span> (Nephew archaic definition)
            </li>
          </ul>
        </li>
        <li>
          Believer to poor brethren
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 25:35">Leviticus 25:35</span> ,
              <span class="modal-verse" id="Matthew 10:40-42">Matthew 10:40-42</span> ,
              <span class="modal-verse" id="Matthew 25:35">25:35</span> ,
              <span class="modal-verse" id="Matthew 25:40">25:40</span> ,
              <span class="modal-verse" id="Mark 9:37">Mark 9:37</span> ,
              <span class="modal-verse" id="Mark 9:41">9:41</span> ,
              <span class="modal-verse" id="Luke 9:48">Luke 9:48</span> ,
              <span class="modal-verse" id="Romans 12:13">Romans 12:13</span> ,
              <span class="modal-verse" id="Galatians 6:2">Galatians 6:2</span> ,
              <span class="modal-verse" id="1 Thessalonians 5:14">1 Thessalonians 5:14</span> ,
              <span class="modal-verse" id="1 Timothy 3:2">1 Timothy 3:2</span> ,
              <span class="modal-verse" id="Titus 1:8">Titus 1:8</span> ,
              <span class="modal-verse" id="Hebrews 13:2">Hebrews 13:2</span> ,
              <span class="modal-verse" id="1 Peter 4:9">1 Peter 4:9</span> ,
              <span class="modal-verse" id="1 John 3:17">1 John 3:17</span>
            </li>
          </ul>
        </li>
        <li>
          Your enemy (food and water)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Romans 12:20">Romans 12:20</span> ,
              <span class="modal-verse" id="Proverbs 25:21-22">Proverbs 25:21-22</span>
            </li>
          </ul>
        </li>
        <li>
          The poor (unspecified)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Ezekiel 18:7">Ezekiel 18:7</span> ,
              <span class="modal-verse" id="Job 29:16">Job 29:16</span> ,
              <span class="modal-verse" id="Job 31:16-20">31:16-20</span> ,
              <span class="modal-verse" id="Job 31:32">31:32</span> ,
              <span class="modal-verse" id="Proverbs 11:25">Proverbs 11:25</span> ,
              <span class="modal-verse" id="Proverbs 14:21">14:21</span> ,
              <span class="modal-verse" id="Proverbs 14:31">14:31</span> ,
              <span class="modal-verse" id="Proverbs 19:17">19:17</span> ,
              <span class="modal-verse" id="Proverbs 21:13">21:13</span> ,
              <span class="modal-verse" id="Proverbs 22:9">22:9</span> ,
              <span class="modal-verse" id="Proverbs 28:27">28:27</span> ,
              <span class="modal-verse" id="Proverbs 30:14">30:14</span> ,
              <span class="modal-verse" id="Proverbs 31:20">31:20</span> ,
              <span class="modal-verse" id="Isaiah 58:7">Isaiah 58:7</span> ,
              <span class="modal-verse" id="Matthew 19:21">Matthew 19:21</span> ,
              <span class="modal-verse" id="Mark 10:21">Mark 10:21</span> ,
              <span class="modal-verse" id="Luke 3:11">Luke 3:11</span> ,
              <span class="modal-verse" id="Luke 11:41">11:41</span> ,
              <span class="modal-verse" id="Luke 12:33">12:33</span> ,
              <span class="modal-verse" id="Ephesians 4:28">Ephesians 4:28</span> ,
              <span class="modal-verse" id="1 Timothy 6:18">1 Timothy 6:18</span> ,
              <span class="modal-verse" id="Hebrews 13:16">Hebrews 13:16</span>
            <li>
              Note: not the rich
              <ul class="styled">
                <li>
                  <span class="modal-verse" id="Proverbs 22:16">Proverbs 22:16</span> ,
                  <span class="modal-verse" id="Luke 14:12-14">Luke 14:12-14</span>
                </li>
              </ul>
            </li>
            <li>
              Laborers for God
              <ul class="sub">
                <li>
                  <span class="modal-verse" id="3 John 1:8">3 John 1:8</span> ,
                  <span class="modal-verse" id="Philippians 2:29">Philippians 2:29</span> ,
                  <span class="modal-verse" id="2 Corinthians 7:2">2 Corinthians 7:2</span> ,
                  <span class="modal-verse" id="Colossians 4:10">Colossians 4:10</span> ,
                  <span class="modal-verse" id="Titus 3:13-14">Titus 3:13-14</span>
                </li>
              </ul>
            </li>
            <li>
              Receive him not into your house (false prophet)
              <ul class="sub">
                <li>
                  <span class="modal-verse" id="2 John 1:10">2 John 1:10</span>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Giving</span>
      <ul class="styled">
        <li>
          Give/lend (to brother) cheerfully
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 15:10">Deuteronomy 15:10</span> ,
              <span class="modal-verse" id="Romans 12:8">Romans 12:8</span> ,
              <span class="modal-verse" id="2 Corinthians 9:7">2 Corinthians 9:7</span> ,
              <span class="modal-verse" id="1 Peter 4:9">1 Peter 4:9</span>
            </li>
          </ul>
        </li>
        <li>
          Give (alms) with simplicity (with sincerity; not to be seen of men)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 6:1-4">Matthew 6:1-4</span> ,
              <span class="modal-verse" id="Romans 12:8">Romans 12:8</span>
            </li>
          </ul>
        </li>
        <li>
          Give to him that asks you
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 21:26">Proverbs 21:26</span> ,
              <span class="modal-verse" id="Matthew 5:42">Matthew 5:42</span> ,
              <span class="modal-verse" id="Luke 6:30">Luke 6:30</span> ,
              <span class="modal-verse" id="Luke 6:38">Luke 6:38</span>
            </li>
            <li>
              Note: there is a concept of refusing in the Bible: young widows; those who are lazy; false prophets
            </li>
          </ul>
        </li>
        <li>
          Give gifts
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Luke 16:9">Luke 16:9</span> ,
              <span class="modal-verse" id="Proverbs 17:8">Proverbs 17:8</span> ,
              <span class="modal-verse" id="Proverbs 18:16">18:16</span> ,
              <span class="modal-verse" id="Proverbs 19:6">19:6</span> ,
              <span class="modal-verse" id="Proverbs 21:14">21:14</span>
            </li>
          </ul>
        </li>
        <li>
          Be reconciled with thy brother before giving your offering
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 5:23-24">Matthew 5:23-24</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Financial responsibility</span>
      <ul class="styled">
        <li>
          First prepare your work (before you buy the house, start the family, etc.)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 24:27">Proverbs 24:27</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Tithing</span>
      <ul class="styled">
        <li>
          Pay 1/10 of your increase unto the Lord
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Genesis 14:20">Genesis 14:20</span> ,
              <span class="modal-verse" id="Genesis 28:22">28:22</span> ,
              <span class="modal-verse" id="Leviticus 27:30">Leviticus 27:30</span> ,
              <span class="modal-verse" id="Leviticus 27:32">27:32</span> ,
              <span class="modal-verse" id="Malachi 3:8-10">Malachi 3:8-10</span> ,
              <span class="modal-verse" id="Matthew 22:21">Matthew 22:21</span> ,
              <span class="modal-verse" id="Matthew 23:23">23:23</span> ,
              <span class="modal-verse" id="Mark 12:17">Mark 12:17</span> ,
              <span class="modal-verse" id="Luke 11:42">Luke 11:42</span> ,
              <span class="modal-verse" id="Luke 18:12">18:12</span> ,
              <span class="modal-verse" id="Luke 20:25">20:25</span> ,
              <span class="modal-verse" id="1 Corinthians 9:3-14">1 Corinthians 9:3-14</span> ,
              <span class="modal-verse" id="1 Corinthians 16:2">16:2</span> ,
              <span class="modal-verse" id="Hebrews 7:8">Hebrews 7:8</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Business Ethics</span>
      <ul class="styled">
        <li>
          Hate suretyship
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 6:1-5">Proverbs 6:1-5</span> ,
              <span class="modal-verse" id="Proverbs 11:15">11:15</span> ,
              <span class="modal-verse" id="Proverbs 17:18">17:18</span> ,
              <span class="modal-verse" id="Proverbs 20:16">20:16</span> ,
              <span class="modal-verse" id="Proverbs 22:26">22:26</span> ,
              <span class="modal-verse" id="Proverbs 27:13">27:13</span>
            </li>
          </ul>
        </li>
        <li>
          The wages of him that is hired shall not abide with thee all night until the morning
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 19:13">Leviticus 19:13</span> ,
              <span class="modal-verse" id="Deuteronomy 24:14-15">Deuteronomy 24:14-15</span> ,
              <span class="modal-verse" id="Malachi 3:5">Malachi 3:5</span>
            </li>
          </ul>
        </li>
        <li>
          Thou shalt not steal
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 20:15">Exodus 20:15</span> ,
              <span class="modal-verse" id="Leviticus 19:11">Leviticus 19:11</span> ,
              <span class="modal-verse" id="Deuteronomy 5:19">Deuteronomy 5:19</span> ,
              <span class="modal-verse" id="Matthew 19:18">Matthew 19:18</span> ,
              <span class="modal-verse" id="Mark 7:22">Mark 7:22</span> ,
              <span class="modal-verse" id="Mark 10:19">10:19</span> ,
              <span class="modal-verse" id="Luke 18:20">Luke 18:20</span> ,
              <span class="modal-verse" id="Ephesians 4:28">Ephesians 4:28</span> ,
              <span class="modal-verse" id="Romans 13:9">Romans 13:9</span> ,
              <span class="modal-verse" id="1 Timothy 1:10">1 Timothy 1:10</span> ,
              <span class="modal-verse" id="Titus 2:10">Titus 2:10</span> ,
              <span class="modal-verse" id="1 Peter 4:15">1 Peter 4:15</span>
            </li>
          </ul>
        </li>
        <li>
          False balance
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 19:35-36">Leviticus 19:35-36</span> ,
              <span class="modal-verse" id="Deuteronomy 25:13-15">Deuteronomy 25:13-15</span> ,
              <span class="modal-verse" id="Proverbs 11:1">Proverbs 11:1</span> ,
              <span class="modal-verse" id="Proverbs 16:11">16:11</span> ,
              <span class="modal-verse" id="Proverbs 20:23">20:23</span> ,
              <span class="modal-verse" id="Ezekiel 45:10">Ezekiel 45:10</span>
            </li>
          </ul>
        </li>
        <li>
          Defraud not
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 6:2">Leviticus 6:2</span> ,
              <span class="modal-verse" id="Leviticus 19:13">19:13</span> ,
              <span class="modal-verse" id="Deuteronomy 24:14-15">Deuteronomy 24:14-15</span> ,
              <span class="modal-verse" id="Proverbs 13:11">Proverbs 13:11</span> ,
              <span class="modal-verse" id="Proverbs 21:6">21:6</span> ,
              <span class="modal-verse" id="Proverbs 22:22">22:22</span> ,
              <span class="modal-verse" id="Jeremiah 22:13">Jeremiah 22:13</span> ,
              <span class="modal-verse" id="Mark 10:19">Mark 10:19</span> ,
              <span class="modal-verse" id="1 Thessalonians 4:6">1 Thessalonians 4:6</span> ,
              <span class="modal-verse" id="James 5:4">James 5:4</span>
            </li>
            <li>
              Meaning: to take something that belongs to someone through deceit/cheating/lying/tricks
            </li>
          </ul>
        </li>
        <li>
          Extortion/robbery
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 6:2">Leviticus 6:2</span> ,
              <span class="modal-verse" id="Leviticus 19:13">19:13</span> ,
              <span class="modal-verse" id="Proverbs 1:15">Proverbs 1:15</span> ,
              <span class="modal-verse" id="Proverbs 21:7">21:7</span> ,
              <span class="modal-verse" id="Proverbs 22:22">22:22</span> ,
              <span class="modal-verse" id="Proverbs 28:24">28:24</span> ,
              <span class="modal-verse" id="Ezekiel 18:7">Ezekiel 18:7</span> ,
              <span class="modal-verse" id="Ezekiel 22:12">22:12</span> ,
              <span class="modal-verse" id="Ezekiel 45:9">45:9</span> ,
              <span class="modal-verse" id="Luke 3:13">Luke 3:13</span> ,
              <span class="modal-verse" id="1 Corinthians 6:10">1 Corinthians 6:10</span>
            </li>
            <li>
              Meaning: to take something that belongs to someone through force or threats
            </li>
          </ul>
        </li>
        <li>
          Restore lost property
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 23:4">Exodus 23:4</span> ,
              <span class="modal-verse" id="Leviticus 6:3">Leviticus 6:3</span> ,
              <span class="modal-verse" id="Deuteronomy 22:1-3">Deuteronomy 22:1-3</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Lending</span>
      <ul class="styled">
        <li>
          Lend to poor brethren
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 15:7-11">Deuteronomy 15:7-11</span> ,
              <span class="modal-verse" id="Psalm 112:5">Psalm 112:5</span> ,
              <span class="modal-verse" id="Matthew 5:42">Matthew 5:42</span>
            </li>
          </ul>
        </li>
        <li>
          Hope for nothing in return (when lending)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 15:9">Deuteronomy 15:9</span> ,
              <span class="modal-verse" id="Luke 6:30">Luke 6:30</span> ,
              <span class="modal-verse" id="Luke 6:35">6:35</span>
            </li>
          </ul>
        </li>
        <li>
          Thou shalt not lend upon usury to thy brother (charging interest)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 22:25">Exodus 22:25</span> ,
              <span class="modal-verse" id="Leviticus 25:35-37">Leviticus 25:35-37</span> ,
              <span class="modal-verse" id="Deuteronomy 23:19-20">Deuteronomy 23:19-20</span> ,
              <span class="modal-verse" id="Nehemiah 5:9-11">Nehemiah 5:9-11</span> ,
              <span class="modal-verse" id="Psalm 15:5">Psalm 15:5</span> ,
              <span class="modal-verse" id="Proverbs 28:8">Proverbs 28:8</span> ,
              <span class="modal-verse" id="Ezekiel 18:8">Ezekiel 18:8</span> ,
              <span class="modal-verse" id="Ezekiel 22:12">22:12</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t hold your poor neighbor’s pledge (collateral) overnight (clothing)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Exodus 22:26-27">Exodus 22:26-27</span> ,
              <span class="modal-verse" id="Deuteronomy 24:12-13">Deuteronomy 24:12-13</span> ,
              <span class="modal-verse" id="Ezekiel 18:7">Ezekiel 18:7</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t go into thy brother’s house to fetch his pledge: wait for him to bring it out
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 24:10-11">Deuteronomy 24:10-11</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t take a widow’s raiment to pledge
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 24:17">Deuteronomy 24:17</span>
            </li>
          </ul>
        </li>
        <li>
          Don’t take the nether or upper millstone as a pledge
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 24:6">Deuteronomy 24:6</span>
            </li>
          </ul>
        </li>
        <li>
          Take the pledge of the stranger
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Proverbs 20:16">Proverbs 20:16</span> ,
              <span class="modal-verse" id="Proverbs 27:13">27:13</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="new-testament-church">NEW TESTAMENT CHURCH</h3>
  <ol>
    <li>
      <span class="main-li">Note: the word “Church” is used interchangeably with congregation</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Hebrews 2:12">Hebrews 2:12</span> quotes <span class="modal-verse" id="Psalm 22:22">Psalm 22:22</span>
        </li>
        <li>
          also <span class="modal-verse" id="Acts 7:38">Acts 7:38</span>, all of the congregation of the children of Israel is quoted as “church in the wilderness”
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Go to church</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 12:5">Deuteronomy 12:5</span> ,
          <span class="modal-verse" id="Hebrews 10:25">Hebrews 10:25</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Follow men of God (spiritual leaders)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 4:16">1 Corinthians 4:16</span> ,
          <span class="modal-verse" id="1 Corinthians 11:1">11:1</span> ,
          <span class="modal-verse" id="Philippians 3:17">Philippians 3:17</span> ,
          <span class="modal-verse" id="Hebrews 6:12">Hebrews 6:12</span> ,
          <span class="modal-verse" id="Hebrews 13:7">13:7</span> ,
          <span class="modal-verse" id="James 5:10">James 5:10</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Be of one mind/spirit (teamwork, unity)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Mark 3:25">Mark 3:25</span> ,
          <span class="modal-verse" id="Romans 15:5-7">Romans 15:5-7</span> ,
          <span class="modal-verse" id="1 Corinthians 1:10">1 Corinthians 1:10</span> ,
          <span class="modal-verse" id="2 Corinthians 13:11">2 Corinthians 13:11</span> ,
          <span class="modal-verse" id="Ephesians 4:3">Ephesians 4:3</span> ,
          <span class="modal-verse" id="Philippians 1:27">Philippians 1:27</span> ,
          <span class="modal-verse" id="Philippians 2:2">2:2</span> ,
          <span class="modal-verse" id="Philippians 3:16">3:16</span> ,
          <span class="modal-verse" id="1 Peter 3:8">1 Peter 3:8</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Make not my Father’s house a house of merchandise</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Matthew 21:12-13">Matthew 21:12-13</span> ,
          <span class="modal-verse" id="Mark 11:15-17">Mark 11:15-17</span> ,
          <span class="modal-verse" id="Luke 19:45-46">Luke 19:45-46</span> ,
          <span class="modal-verse" id="John 2:16">John 2:16</span>
        </li>
        <li>
          Meaning: there shouldn’t be buying or selling of goods or services in the church building
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">A foreign speaker is required to translate or have a translator in the church</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 14:13">1 Corinthians 14:13</span> ,
          <span class="modal-verse" id="1 Corinthians 14:27-28">14:27-28</span> ,
          <span class="modal-verse" id="1 Corinthians 14:33">14:33</span>
        </li>
        <li>
          Note: “Tongues” is used interchangeably with language
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Acts 2:1-13">Acts 2:1-13</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">A maximum of 3 preachers in a church service is permitted</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 14:29">1 Corinthians 14:29</span> ,
          <span class="modal-verse" id="1 Corinthians 14:33">14:33</span>
        </li>
        <li>
          Note: a preacher isn’t necessarily the pastor/bishop/etc
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">One man speaks at a time (in church) - no interrupting</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 14:30-33">1 Corinthians 14:30-33</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Women keep silence in the churches</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 14:34-35">1 Corinthians 14:34-35</span> ,
          <span class="modal-verse" id="1 Timothy 2:11-12">1 Timothy 2:11-12</span> ,
          <span class="modal-verse" id="Revelation 2:20">Revelation 2:20</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Do not call a religious leader rabbi, master or father (rabbi means master. God is your spiritual master and father</span>
      <ul class="styled">
        <li>
          Note: according to the flesh
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Colossians 3:22">Colossians 3:22</span> ,
              <span class="modal-verse" id="Colossians 4:1">4:1</span>
            </li>
          </ul>
        </li>
        <li>
          <span class="modal-verse" id="Matthew 23:8-10">Matthew 23:8-10</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Widows who fulfill these requirements can go to the church for assistance</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Timothy 5:5">1 Timothy 5:5</span> ,
          <span class="modal-verse" id="1 Timothy 5:9-16">9-16:5</span>
        </li>
        <li>
          Husband is dead
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Timothy 5:5">1 Timothy 5:5</span>
            </li>
          </ul>
        </li>
        <li>
          Born again-saved
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Timothy 5:5">1 Timothy 5:5</span>
            </li>
          </ul>
        </li>
        <li>
          At least 60 years old
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Timothy 5:9">1 Timothy 5:9</span>
            </li>
          </ul>
        </li>
        <li>
          Practiced monogamy in marriage
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Timothy 5:9">1 Timothy 5:9</span> ,
              <span class="modal-verse" id="1 Timothy 5:14">5:14</span>
            </li>
          </ul>
        </li>
        <li>
          Godly- well reported of good works
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Timothy 5:5-6">1 Timothy 5:5-6</span> ,
              <span class="modal-verse" id="1 Timothy 5:10">5:10</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Let all things be done decently and in order (with the purpose of edifying other believers)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 14:26">1 Corinthians 14:26</span> ,
          <span class="modal-verse" id="1 Corinthians 14:40">14:40</span> ,
          <span class="modal-verse" id="2 Corinthians 12:20">2 Corinthians 12:20</span> (tumult)
        </li>
        <li>
          Principle: Elder = Bishop = Pastor = Overseer = Steward
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Titus 1:5">Titus 1:5</span> ,
              <span class="modal-verse" id="Titus 1:7">1:7</span> ,
              <span class="modal-verse" id="Acts 20:17">Acts 20:17</span> ,
              <span class="modal-verse" id="Acts 20:28">20:28</span> ,
              <span class="modal-verse" id="1 Peter 5:1-2">1 Peter 5:1-2</span>
            </li>
          </ul>
        </li>
        <li>
          Pastors and deacons must fulfill biblical requirements
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Timothy 3:2-7">1 Timothy 3:2-7</span> ,
              <span class="modal-verse" id="1 Timothy 3:8-12">8-12</span> ,
              <span class="modal-verse" id="Titus 1:6-9">Titus 1:6-9</span>
            </li>
          </ul>
        </li>
        <li>
          Pastors and deacons (and spiritual workers) are paid from the church
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 25:4">Deuteronomy 25:4</span> ,
              <span class="modal-verse" id="Acts 6:2">Acts 6:2</span> ,
              <span class="modal-verse" id="Romans 15:27">Romans 15:27</span> ,
              <span class="modal-verse" id="1 Corinthians 9">1 Corinthians 9</span> (note: altogether),
              <span class="modal-verse" id="Galatians 6:6">Galatians 6:6</span> (“communicate” here means to give),
              <span class="modal-verse" id="1 Timothy 5:17-18">1 Timothy 5:17-18</span> ,
              <span class="modal-verse" id="Hebrews 13:7">Hebrews 13:7</span>
            </li>
          </ul>
        </li>
        <li>
          Pastors oversee the church (administer/supervisor)
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Acts 20:28">Acts 20:28</span> ,
              <span class="modal-verse" id="1 Peter 5:2">1 Peter 5:2</span>
            </li>
          </ul>
        </li>
        <li>
          Pastors don’t rule as a lord
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Mark 10:42-45">Mark 10:42-45</span> ,
              <span class="modal-verse" id="1 Peter 5:2-3">1 Peter 5:2-3</span>
            </li>
          </ul>
        </li>
        <li>
          Pastor: commit the distribution of God’s word to faithful men
          <ul class="sub">
            <li>
              <span class="modal-verse" id="2 Timothy 2:2">2 Timothy 2:2</span>
            </li>
          </ul>
        </li>
        <li>
          Ordain elders in every city
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Titus 1:5">Titus 1:5</span>
            </li>
          </ul>
        </li>
        <li>
          Lay hands on no man suddenly
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Timothy 5:22">1 Timothy 5:22</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="obeying-authority">OBEYING AUTHORITY</h3>
  <ol>
    <li>
      <span class="main-li">Obey your authorities (in general)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Romans 13:1-2">Romans 13:1-2</span> ,
          <span class="modal-verse" id="Galatians 5:20">Galatians 5:20</span> ,
          <span class="modal-verse" id="Ephesians 5:21">Ephesians 5:21</span> ,
          <span class="modal-verse" id="1 Peter 5:5">1 Peter 5:5</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Wife to husband</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 7:11">Proverbs 7:11</span> ,
          <span class="modal-verse" id="Proverbs 19:13">19:13</span> ,
          <span class="modal-verse" id="Proverbs 21:9">21:9</span> ,
          <span class="modal-verse" id="Proverbs 21:19">21:19</span> ,
          <span class="modal-verse" id="Proverbs 25:24">25:24</span> ,
          <span class="modal-verse" id="Proverbs 27:15-16">27:15-16</span> ,
          <span class="modal-verse" id="Ephesians 5:22-24">Ephesians 5:22-24</span> ,
          <span class="modal-verse" id="1 Peter 3:1">1 Peter 3:1</span> ,
          <span class="modal-verse" id="1 Peter 3:5">3:5</span> ,
          <span class="modal-verse" id="1 Peter 3:6">3:6</span> ,
          <span class="modal-verse" id="Titus 2:5">Titus 2:5</span> ,
          <span class="modal-verse" id="Colossians 3:18">Colossians 3:18</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Children to parents</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Proverbs 1:8">Proverbs 1:8</span> ,
          <span class="modal-verse" id="Proverbs 4:1-4">4:1-4</span> ,
          <span class="modal-verse" id="Proverbs 4:10">4:10</span> ,
          <span class="modal-verse" id="Proverbs 6:20-23">6:20-23</span> ,
          <span class="modal-verse" id="Proverbs 13:1">13:1</span> ,
          <span class="modal-verse" id="Proverbs 15:5">15:5</span> ,
          <span class="modal-verse" id="Proverbs 23:22">23:22</span> ,
          <span class="modal-verse" id="Proverbs 23:26">23:26</span> ,
          <span class="modal-verse" id="Ephesians 6:1">Ephesians 6:1</span> ,
          <span class="modal-verse" id="Colossians 3:20">Colossians 3:20</span> ,
          <span class="modal-verse" id="1 Timothy 3:4">1 Timothy 3:4</span> ,
          <span class="modal-verse" id="1 Timothy 3:12">3:12</span> ,
          <span class="modal-verse" id="Titus 1:6">Titus 1:6</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Servants to masters</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Samuel 22:14">1 Samuel 22:14</span> ,
          <span class="modal-verse" id="Ephesians 6:5">Ephesians 6:5</span> ,
          <span class="modal-verse" id="Colossians 3:22">Colossians 3:22</span> ,
          <span class="modal-verse" id="1 Timothy 6:2">1 Timothy 6:2</span> ,
          <span class="modal-verse" id="Titus 2:9-10">Titus 2:9-10</span> ,
          <span class="modal-verse" id="1 Peter 2:18">1 Peter 2:18</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Congregation to pastor & ministry workers (within church role)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="1 Corinthians 16:16">1 Corinthians 16:16</span> ,
          <span class="modal-verse" id="Hebrews 13:17">Hebrews 13:17</span> ,
          <span class="modal-verse" id="1 Peter 5:5">1 Peter 5:5</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Citizen to civil authority/laws (within government role)</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Deuteronomy 17:10-11">Deuteronomy 17:10-11</span> ,
          <span class="modal-verse" id="Romans 13:5">Romans 13:5</span> ,
          <span class="modal-verse" id="Titus 3:1">Titus 3:1</span> ,
          <span class="modal-verse" id="1 Peter 2:13-14">1 Peter 2:13-14</span> ,
          <span class="modal-verse" id="1 Peter 4:6">4:6</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Exception: Don’t obey commands to sin</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Acts 4:19">Acts 4:19</span> ,
          <span class="modal-verse" id="Acts 5:29">5:29</span> ,
          <span class="modal-verse" id="Romans 13:1">Romans 13:1</span> (chain of command),
          <span class="modal-verse" id="Daniel 1:8-9">Daniel 1:8-9</span> ,
          <span class="modal-verse" id="Exodus 1:17">Exodus 1:17</span> ,
          <span class="modal-verse" id="Exodus 1:21">1:21</span> ,
          <span class="modal-verse" id="1 Kings 18:3-4">1 Kings 18:3-4</span>
          <ul class="sub">
            <li>
              God’s commands have pre-eminence over man’s commands
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="patience">PATIENCE</h3>
  <ol>
    <li>
      <span class="main-li">Be Patient</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Ecclesiastes 7:8">Ecclesiastes 7:8</span> ,
          <span class="modal-verse" id="Luke 21:19">Luke 21:19</span> ,
          <span class="modal-verse" id="Romans 12:12">Romans 12:12</span> ,
          <span class="modal-verse" id="1 Thessalonians 5:14">1 Thessalonians 5:14</span> ,
          <span class="modal-verse" id="1 Timothy 3:3">1 Timothy 3:3</span> ,
          <span class="modal-verse" id="1 Timothy 6:11">6:11</span> ,
          <span class="modal-verse" id="2 Timothy 2:24">2 Timothy 2:24</span> ,
          <span class="modal-verse" id="2 Timothy 4:2">4:2</span> ,
          <span class="modal-verse" id="Titus 2:2">Titus 2:2</span> ,
          <span class="modal-verse" id="James 1:4">James 1:4</span> ,
          <span class="modal-verse" id="James 5:7-8">5:7-8</span> ,
          <span class="modal-verse" id="James 5:10">5:10</span> ,
          <span class="modal-verse" id="2 Peter 1:6">2 Peter 1:6</span> ,
          <span class="modal-verse" id="2 Peter 3:15">3:15</span>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Wait upon the Lord</span>
      <ul class="styled">
        <li>
          <span class="modal-verse" id="Psalm 27:14">Psalm 27:14</span> ,
          <span class="modal-verse" id="Psalm 37:7">37:7</span> ,
          <span class="modal-verse" id="Psalm 37:34">37:34</span> ,
          <span class="modal-verse" id="Proverbs 20:22">Proverbs 20:22</span> ,
          <span class="modal-verse" id="Zephaniah 3:8">Zephaniah 3:8</span> ,
          <span class="modal-verse" id="Hosea 12:6">Hosea 12:6</span>
        </li>
      </ul>
    </li>
  </ol>
  <h3 id="physical">PHYSICAL</h3>
  <ol>
    <li>
      <span class="main-li">Hair</span>
      <ul class="styled">
        <li>
          Ye shall not round the corners of your heads, neither shalt thou mar the corners of thy beard
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 19:27">Leviticus 19:27</span> ,
              <span class="modal-verse" id="Leviticus 21:5">Leviticus 21:5</span> ,
              <span class="modal-verse" id="Deuteronomy 14:1">Deuteronomy 14:1</span> ,
              <span class="modal-verse" id="Ezekiel 44:20">Ezekiel 44:20</span>
              <ul class="styled">
                <li>
                  Meaning: Not to shave off part/whole of the head and not shave off parts of the beard to disfigure. This prohibits mohawk, carving designs in the head or beard, etc.
                  <ul class="sub">
                    <li>
                      Note: Full shaving is often done during times of mourning
                      <ul class="styled">
                        <li>
                          <span class="modal-verse" id="Deuteronomy 21:12-13">Deuteronomy 21:12-13</span> ,
                          <span class="modal-verse" id="Job 1:20">Job 1:20</span> ,
                          <span class="modal-verse" id="Job 1:22">1:22</span> ,
                          <span class="modal-verse" id="Jeremiah 7:29">Jeremiah 7:29</span> ,
                          <span class="modal-verse" id="Micah 1:16">Micah 1:16</span>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          Men should have short hair; women should have long hair
          <ul class="sub">
            <li>
              <span class="modal-verse" id="1 Corinthians 6:9">1 Corinthians 6:9</span> ,
              <span class="modal-verse" id="1 Corinthians 11:1-16">1 Corinthians 11:1-16</span> ,
              <span class="modal-verse" id="Ezekiel 44:20">Ezekiel 44:20</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Skin</span>
      <ul class="styled">
        <li>
          Ye shall not make any cuttings in your flesh
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 19:28">Leviticus 19:28</span> ,
              <span class="modal-verse" id="Leviticus 21:5">21:5</span> ,
              <span class="modal-verse" id="Deuteronomy 14:1">Deuteronomy 14:1</span>
            </li>
          </ul>
        </li>
        <li>
          No tattoos
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Leviticus 19:28">Leviticus 19:28</span>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ol>
  <br />
  Food 1. Don’t be a glutton • Deuteronomy 21:20, Proverbs
  13:25, 23:1-3,20-21, 25:16,27, 27:7, Ecclesiastes 10:16-17 (2
  Thessalonians 3:10), Galatians 5:21, Titus 1:8 • Not given to wine: 1
  Timothy 3:3,8, Titus 1:7, 2:3 6. Don’t fast for show: no sad
  countenance, anoint the head with oil, wash face • Matthew 6:16-18 • We
  should fast, but there is no specified amount: Joel 1:14, 2:12,15 7.
  Cause no offense in eating (and receive the weaker brother) • Romans
  14:1,3,5,13,15,16,19,20,22, 15:1-2,7, 1 Corinthians 8:9, 10:27-28,32 •
  Example: food sacrificed unto idols 8. Eat such things as are set before
  you (don’t be a picky eater) • Proverbs 24:13, Luke 10:7-8, 1
  Corinthians 10:25,27 Drink 1. Don’t drink alcohol, don’t do drugs: Be
  sober (Have a clear state of mind) • Deuteronomy 21:20, Psalm 75:8,
  Proverbs 20:1, 23:20-21,29-35, 31:4, Isaiah 5:22, Habakkuk 2:5,15, Luke
  21:34, Romans 13:13, 1 Corinthians 6:10, Galatians 5:21, Ephesians 5:18,
  1 Thessalonians 5:6,8, 3:2-3, 1 Timothy 3:2,11, Titus 1:8, 2:2,4,6, 1
  Peter 1:13, 4:7, 5:8 Clothing/Attire 1. The woman shall not wear that
  which pertains to a man, neither shall a man put on a woman’s garment:
  For all who do so are an abomination unto the LORD thy God • Deuteronomy
  22:5, 1 Corinthians 6:9 2. Dress modestly (cheap and not flashy) •
  Women: Proverbs 7:10, 1 Timothy 2:9, 1 Peter 3:3; Men: Matthew 23:5,
  Luke 20:46 3. With Shamefacedness (cover your nakedness) • Proverbs
  7:10, 1 Timothy 2:9 4. With sobriety (dress appropriate/sensible) • 1
  Timothy 2:9 PRAISE 1. Praise the Lord Who: All People: Psalm 30:4,
  103:1-2, 104:1, 117:1, 134:1-2, 135:1-2,19-20, 145:21, 146:1-2,
  148:11-13, 150:6 Note: God’s creation praises God by declaring His
  majesty. What: Praise the Lord: Psalm 22:23, 29:1-2, 40:16, 44:1, 66:8,
  67:3,5, 68:26, 70:4, 96:2,7-8, 99:9, 100:4, 103:1-2,21, 104:35, 105:45,
  106:48, 107:1, 113:1,9, 115:18, 116:19, 117:2, 118:1,29, 135:1,20-21,
  135:1-3,26, 146:1,10, 147:1,20, 148:1,14, 149:1,9, 150:1,6, 1 Chronicles
  16:28-29, 2 Chronicles 20:21, Romans 15:11, Revelation 14:7; (glory
  means to boast): Glory in God: Jeremiah 9:24, 1 Corinthians 1:31, 2
  Corinthians 10:17; Not in sin: James 3:14; Not in men: 1 Corinthians
  3:21 Where: In church: Psalm 35:18, 42:4, 99:9, 107:32, 148:1, 149:1,
  150:1. (Sing) upon bed: Psalm 149:5 When: Every day: Psalm 34:1,
  35:27-28, 145:2,21, Hebrews 13:15. When you prosper/ are full:
  Deuteronomy 8:10. When you are merry (not to sad people; loud
  voice/early): Proverbs 25:20, 27:14, James 5:13 How: With trumpet: Psalm
  98:6, 150:3. With psaltery: Psalm 81:2, 33:2, 150:3. With harp: Psalm
  33:2, 81:2, 98:5, 147:7, 149:3, 150:3. With timbrel: Psalm 81:2, 149:3,
  150:4. With stringed instruments: Psalm 150:4. With organs: Psalm 150:4.
  With cornet: Psalm 98:6. With loud cymbals: Psalm 150:5. With high
  cymbals: Psalm 150:5. With an instrument of 10 strings: Psalm 33:2,
  92:3, 149:9. With dance: Psalm 149:3, 150:4. With singing (psalms,
  hymns, and spiritual songs): 1 Chronicles 16:9,23, Psalm 9:11, 30:4,
  33:3, 47:6-7, 6:1-2, 67:4, 68:4, 81:1-2, 95:1-2, 96:1-2, 98:1,4,5,
  100:1-2, 105:1-3, 147:7, 149:1,3,5-6, Isaiah 42:10, Zephaniah 3:14,
  Zechariah 2:10, Ephesians 5:19, Colossians 3:16. Talk of his works: 1
  Chronicles 16:8,9,24, Psalm 9:11, 66:3, 105:1-2, 150:2. Say: the Lord
  reigneth among the heathen: 1 Chronicles 16:31, Psalm 96:10, Declare his
  glory and wonder: Psalm 68:4,34, 96:3, Clap: Psalm 47:1. Play
  skillfully: Psalm 33:3. 2. Don’t praise yourself • Proverbs 20:6, 25:14,
  27:2, 30:32, Jeremiah 9:23, 1 Corinthians 1:29, 2 Corinthians 11:16 3.
  Flattery (insincere praise) • Psalm 12:2-3, Proverbs 26:23-26,28, 27:6,
  28:23, 29:5, 1 John 3:18 PRAYER 1. Commanded to pray (ask, seek and
  knock) for everything we care about • 2 Chronicles 16:8, Psalm 50:15,
  55:22, 62:8, 105:1, Matthew 7:7, Luke 11:9, Philippians 4:6, James 4:2,
  5:13, Hebrews 4:16, 1 Peter 4:7, 5:7 • Note: lifting up hands is an
  expression of pleading: Psalm 134:2, Lamentations 3:41, 1 Timothy 2:8 2.
  Pray without ceasing • 1 Samuel 12:23, Luke 11:5-8, 18:1-8, Romans
  12:12, Ephesians 6:18, Colossians 4:2, 1 Thessalonians 5:17, James
  5:16-18 3. Long prayers are done in private; public prayer is only short
  • 1 Timothy 2:8: Matthew 6:5-8, 14:23, 23:14, Mark 1:35, 6:46, 12:40,
  Luke 6:12, 20:47; Matthew 18:19-20, 21:13 4. Don’t pray for show •
  Matthew 6:5-6 5. Use not vain repetitions as the heathens do (chants) •
  Matthew 6:7-8 6. Ask in faith (nothing wavering) • Mark 11:22-24, 1
  Timothy 2:8, Hebrews 4:16, James 1:6-7 7. Take the Lord’s prayer as an
  example/model prayer • Matthew 6:9 8. Ask in Jesus’ Name • John 16:24:
  James 4:3, 1 John 5:14-15 (in him) • Means to ask according to God’s
  will; on Jesus’ behalf/authority 9. Pray in the Holy Ghost • Ephesians
  6:18, Jude 1:20 • The Holy Ghost’s role in our prayers: Romans 8:26-27
  10. Pray with thanksgiving • Philippians 4:6, Colossians 4:2 Things
  commanded to ask for: 1. Wisdom • James 1:5 Note: Proverbs 3:15, 8:11, 2
  Chronicles 1:10-12, 1 Kings 3:5,9-14 2. Forgiveness: forsake & confess
  your sins to God • Leviticus 5:5, 26:40-41, Numbers 5:7, Job 31:33,
  Psalm 51, Proverbs 28:13, Jeremiah 3:13, Hosea 14:1-2, Joel 2:12-13,
  Matthew 6:12, Mark 11:25, Luke 11:4, 1 John 1:9 3. That I enter not into
  temptation • Matthew 6:13, 26:41, Mark 14:38, Luke 11:4, 22:40,46. Note:
  1 Chronicles 4:10, James 1:12-15 4. That I might be accounted worthy to
  escape all these things (snares laid upon a believer for the cares of
  this life) that shall come to pass, and to stand before Jesus • Luke
  21:36 5. More soul winners • Matthew 9:38, Luke 10:2, Ephesians 6:19,
  Colossians 4:3-4, 2 Thessalonians 3:1-2 6. All men • 1 Timothy 2:1 7.
  Brethren (intercession) • Ephesians 6:18, Hebrews 13:18, James 5:16, 1
  John 5:16 8. Health • James 5:14,16 9. For kings and those in authority
  (to live a quiet and peaceable life) • Jeremiah 29:7, 1 Timothy 2:2 10.
  For your enemies • Matthew 5:44, Luke 6:28 Who not to pray for 1. The
  exceeding wicked • Jeremiah 7:16, 11:14, 14:11, 1 John 5:16 PREVENTION
  OF SIN 1. Cut off/avoid that which causes you to commit sin: Make not
  provision for the flesh, to fulfill the lust thereof; eschew (avoid)
  evil, flee fornication and idolatry, be circumspect, vigilant of
  stumbling blocks • Proverbs 4:14-15, 22:3, Ezekiel 14:3-4, Romans 13:14,
  1 Corinthians 10:12, Galatians 6:1; Job 1:1,8, 1 Peter 3:11, 5:9; Exodus
  23:13, Ephesians 4:27, 5:15; Hebrews 12:1 (weight), 2 Timothy 4:5
  (watch); 1 Timothy 3:2, 1 Peter 5:8 • Note: if thine right hand offend
  thee, cut it off, and cast it from thee (means to remove that which
  causes you to sin) (Matthew 5:29-30, 18:8-9, Mark 9:43,45,47), 2 Timothy
  2:20-21 • Job 31:1, Psalm 11:5, 101:3, Proverbs 23:31 • Examples: throw
  out TV/video-games, block distracting websites, remove alcohol/drugs
  from house, etc. • I will set no wicked thing before my eyes (guard your
  eyes and your ears) • Put on the whole armor of God: Ephesians 6:11,13
  2. Don’t cause others to stumble/sin • 1 Corinthians 10:32, 2
  Corinthians 6:3 Protection from harm 1. Protect others • Physical:
  Leviticus 19:16b, Proverbs 3:3, 24:11-12, Luke 10:37; Spiritual
  (watchman): Proverbs 3:3, 12:6, Ezekiel 3:17-21, 33:2-9, Acts 20:26 2.
  Beware of false prophets, wicked people, scribes, the concision •
  Matthew 7:15, 10:17, Mark 12:38, 13:9, Luke 20:46, Philippians 3:2 3.
  Try the spirits whether they are of God (test them) • 1 John 4:1,
  Revelation 2:2 4. Do not be deceived and don’t hearken unto false
  prophets • Deuteronomy 13:3,8, Matthew 16:6, 1 Corinthians 15:33,
  Colossians 2:8, Titus 2:7, Hebrews 13:9, 1 John 3:7, 2 John 1:8 5. Thou
  shalt not follow a multitude to do evil • Exodus 23:2a, Proverbs 1:10,15
  Rewards in Heaven 1. Lay up for yourselves treasures in heaven •
  Proverbs 13:7, Matthew 6:20, 1 Timothy 6:12,19 2. Run that ye may obtain
  • 1 Corinthians 9:24, Philippians 3:15 3. Judge nothing before the time
  • 1 Corinthians 4:5, 2 Corinthians 10:12 • Means to not compare yourself
  with other believers to see who the greater or better Christian is 4.
  Lay aside every weight • Hebrews 12:1 5. Run with patience • Hebrews
  12:1 6. Fight the Good fight • 1 Timothy 1:18, 6:12, 1 Peter 1:13 7.
  Hope to the end • 1 Peter 1:13, 4:19 Righteous Appearance 1. Abstain
  from all appearance of evil; be blameless; have a good name • 1
  Thessalonians 5:22; 1 Timothy 3:2,7, 5:7,Titus 1:6-7, 2 Peter 3:14;
  Proverbs 22:1 2. Let your light so shine before men • Matthew 5:16
  SEXUAL SINS 1. Fornication • Deuteronomy 23:17, Proverbs 22:28, 27:3,
  Ezekiel 22:9, Mark 7:21, Acts 15:20,29, 21:25, Romans 13:13, 1
  Corinthians 6:9,15,18,20, 10:8, Colossians 3:5, Galatians 5:19,
  Ephesians 5:3, 1 Thessalonians 4:3, 1 Timothy 1:10, Titus 2:5, Hebrews
  13:4; Leviticus 19:29 (includes prostitution) 2. Adultery • Exodus
  20:14, Leviticus 18:20, Deuteronomy 5:18, Proverbs 5:8, 6:24, 7:24-27,
  22:28, 31:3, Ezekiel 18:6, 22:11, Matthew 19:18, Mark 7:21, 10:19, Luke
  18:20, Romans 13:9, 1 Corinthians 6:10, Galatians 5:19, Hebrews 13:4,
  James 2:11 3. Sodomy • Leviticus 18:22, Deuteronomy 23:17, Habakkuk 2:15
  4. Bestiality • Leviticus 18:23, Deuteronomy 27:21 5. Incest • Leviticus
  18:6: 18:7-16, 20:11-13,14,17,19-21, 21:2-3, 25:49, Deuteronomy 22:30,
  27:20,22,23, Ezekiel 22:10-11. Close relative of past/present
  relationship prohibited: Leviticus 18:17-18, Amos 2:7: 1 Corinthians 5:1
  6. Forcing Someone (rape) • 2 Samuel 13:12, 1 Corinthians 7:36 SPEECH
  (PREACHING) 1. Preach and Teach the Bible; disperse knowledge (in
  general): Proverbs 10:11,13,14,21,31-32, 12:23, 15:2,7,14,28, 16:23,
  20:15, 23:16, 24:26, 25:11-12, 31:26, Ezekiel 3:1, 2 Timothy 1:6,13-14,
  4:2, Titus 2:3, 1 Peter 4:11 1. Desire to preach: 1 Corinthians 12:31,
  14:1,12,39 2. Be apt (prepared; ready; willing) to teach: 1 Timothy 3:2,
  2 Timothy 2:24, 4:2 (instant) 3. Lean on those who taught you: Titus 1:9
  (as he hath been taught) 4. Diminish not a word (preach the whole Bible;
  don’t omit): Jeremiah 26:2 5. Don’t teach the commandments of men as
  bible doctrine: Matthew 15:9, Mark 7:7, 1 Corinthians 14:39, 1 Timothy
  1:3, Titus 1:14, James 4:11-12; sound doctrine: Titus 2:7-8, Ephesians
  4:29 6. Clear speech and preaching: speak words easy to be understood:
  Habakkuk 2:2, 1 Corinthians 14:9, 2 Corinthians 3:12 7. Rightly dividing
  the word of truth: 2 Timothy 2:15; Galatians 5:20 (heresy). Teaching
  Tip: line upon line and precept on precept: Isaiah 28:9-10,13, 1
  Corinthians 2:13. 8. Preach publicly (places with many listeners):
  Proverbs 10:21, Matthew 5:14-16, 10:27, Luke 12:3 9. Speak with all
  authority (assertiveness): Matthew 7:28-29, Mark 1:22, Luke 4:32, Acts
  4:31, Ephesians 6:20, 1 Timothy 4:11, Titus 2:15 10. Don’t judge when
  you are not within your authority to: Proverbs 30:10, Isaiah 45:9-10,
  Hosea 4:4, Luke 12:14, Romans 9:20-21, 14:4, 1 Corinthians 5:12, 1
  Timothy 4:11, 5:1, women don’t speak in the church, (master>servant,
  parent>child, pastor>congregation, God>whosoever) 11. Be an example:
  don’t judge as a hypocrite: Proverbs 11:9, Matthew 7:1-5, Luke
  6:37,41-42, 12:1-3, 13:15, Romans 2:1-6,17-23, 1 Timothy 4:2,11-12,16,
  Titus 2:7 (pattern), 1 Peter 2:1, 5:3 Speech (Evangelism) 1. Go ye into
  all the world, and preach the gospel to every creature: Psalm 71:15-16,
  Proverbs 11:30, 14:25, 15:24, Matthew 10:7, 28:19, Mark 16:15, Luke
  4:18-19, 9:60, 10:3,9, 24:47, Acts 10:42-43, Ephesians 6:15, Philippians
  1:27, 2:16, 2 Timothy 4:5, Titus 2:1,7-8, 1 Peter 4:10, Jude 1:22-23 2.
  Shake off the dust of your feet (to whoever doesn’t hear you): Matthew
  10:14, Mark 6:11, Luke 9:5, 10:10-12 3. When they persecute you in one
  city flee to another (continue preaching): Matthew 10:23 4. Show forth
  his salvation from day to day (often/routinely): 1 Chronicles 16:23,
  Psalm 96:2 Speech (Edifying) 1. Teach God’s commandments to other
  believers: Exodus 21:1, Leviticus 19:17c, Deuteronomy 4:14, Psalm
  37:30-31, 96:10, Ecclesiastes 12:9, Ezekiel 34:2-3, Malachi 2:6, Matthew
  5:19, 28:20, John 21:15-17, Acts 20:28, Romans 12:6, 1 Corinthians 2:15,
  Ephesians 4:12,15-16,29, 5:11 1 Thessalonians 5:11,14, 1 Timothy
  4:6,11,13-14,16, 6:2, 2 Timothy 4:2, Titus 2:1,15, 3:8, Hebrews
  10:24-25, James 5:19-20, 1 Peter 5:2 (pastors) 2. If your brother sins
  against you, rebuke him (between you and him alone: not publicly):
  Matthew 18:15, Luke 17:3-4, Leviticus 19:17, Proverbs 25:9-10, 27:5,
  28:23 3. Entreat and admonish brethren when they sin in general:
  Galatians 6:1, 2 Thessalonians 3:15, 1 Timothy 5:1-2, 2 Timothy 2:25 4.
  (On the law of God): Speak of them when you sit in your home, walk by
  the way, lie down, rise up: Deuteronomy 6:7, 11:19, Daily: Hebrews 3:13;
  Shall not depart out of thy mouth: Joshua 1:8 (part of meditation) 5.
  Rebuke (false prophets, false accusers or the wicked): Proverbs
  24:24-25, 28:4, 1 Timothy 5:20 (make an example), Titus 1:13, Jude 1:3
  6. Hard preaching mannerisms: Lift voice in strength: Isaiah 58:1. Smite
  with thy hand, stomp with thy foot: Ezekiel 6:11 7. Elder women teach
  the younger women: Titus 2:4 Speech (Control) 1. Restrain your words:
  Proverbs 10:8,10,19, 13:3, 14:23,33, 15:2,23, 17:27-28, 21:23, 25:15,
  29:11, Ecclesiastes 5:1-3,7, 10:14 2. Swift to hear, slow to speak
  (especially don’t interrupt): Proverbs 18:13, 29:11,20, James 1:19 3.
  Shut up and work: Proverbs 14:23, 19:24, 26:15, 1 Thessalonians 4:11, 2
  Thessalonians 3:12 4. Not answering again (to one’s boss): Titus 2:9 5.
  Forbearing threatening (to one’s servant): Ephesians 6:9 6. No vain/idle
  speech: Matthew 12:36, Ephesians 5:4, 1 Timothy 1:6, 6:20 2 Timothy
  2:14,16 7. Thou shalt not take the name of the Lord thy God in vain:
  Exodus 20:7, Deuteronomy 5:11 8. Jesting vs. grave: Ephesians 5:4, 1
  Timothy 3:8,11, Titus 2:2,7 9. Avoid fables: 1 Timothy 1:4, 4:7, Titus
  1:14, 3:9 10. Avoid genealogies: 1 Timothy 1:4, Titus 3:9 11. Avoid
  foolish questions: 2 Timothy 2:23, Titus 3:9 12. Avoid profane
  (disrespectful, contemptuous) speech; railing: 1 Corinthians 6:10,
  Ephesians 4:29,31, 5:4, Colossians 3:8, 1 Timothy 6:20, 2 Timothy 2:16,
  Titus 3:2, James 4:11, 1 Peter 3:9 13. Blasphemy: Exodus 22:28,
  Leviticus 19:12, 22:32, Malachi 1:7,12, Matthew 15:19, Mark 7:22,
  Colossians 3:8 14. Don’t blame God for your temptations: James 1:13,16
  15. Curse not a ruler: Exodus 22:28, Ecclesiastes 10:20, Acts 23:5 16.
  Bless (and don’t curse) your parents: Proverbs 30:11, 31:28 17. Don’t
  profane your brother’s name: Matthew 5:22, Acts 10:15, 2 Corinthians
  11:16 18. Don’t backbite (willful defamation of a person who is not
  present): Psalm 15:3, Proverbs 25:23, Romans 1:29, 2 Corinthians 12:20
  19. Don’t slander (false defamatory statements): Proverbs 10:18, 1
  Timothy 3:11, 1 Peter 2:1 20. Don’t be a talebearer (to reveal secrets
  or gossip): Leviticus 19:16, Proverbs 6:19, 11:13, 16:28, 18:8, 20:19,
  26:20,22, 2 Corinthians 12:20 21. Bless (and curse not) your enemies:
  Matthew 5:44, Luke 6:28, Romans 12:14, James 3:10, 1 Peter 3:9-10 22.
  Speak kindly: pleasant, gracious, courteous: Colossians 4:6: Proverbs
  14:3, 15:1, 16:14,24, 22:11, 31:26, Ecclesiastes 10:12 23. Neither bid
  him Godspeed (to false prophet): 2 John 1:10 Speech (Lying) 1. Don’t
  lie: Leviticus 19:11, Psalm 52:3, 59:12, 119:29,163, Proverbs 3:3, 6:17,
  10:18, 12:17,19,22, 13:5, 14:5,25, 17:4,7, 19:5,9, 26:28, 30:8,
  Zechariah 8:16, Romans 12:17, Ephesians 4:15,25, 6:15, Colossians 3:9, 1
  Timothy 1:10, 3:8, 1 Peter 2:12, Revelation 21:8 a. Thou shalt not bear
  false witness: Exodus 20:16, 23:1, Deuteronomy 5:20, Proverbs 6:19,
  12:17, 14:5, 19:5,9, 21:28, 24:28, 25:18, Matthew 15:19, 19:18, Mark
  10:19, Luke 3:14, 18:20, Romans 13:9, 1 Timothy 1:10, Titus 2:3 b. Don’t
  deal falsely (to cheat or deceive people): Leviticus 19:11, Proverbs
  12:22, 20:17, 1 Peter 3:10 Speech (to whom) 1. Speak only to those who
  receive the Word: Proverbs 25:11-12, Matthew 10:14 i.e. Don’t strive
  about the law: Titus 3:9 a. Not a fool: Proverbs 9:6, 14:7, 17:12, 23:9,
  29:9, 1 Corinthians 14:38 b. Not a scorner (mocker): Proverbs 9:7-8, 2
  Corinthians 12:20 (debates) c. Not a wicked man: Proverbs 9:7, Matthew
  7:6, Revelation 22:11 d. Not a heretic: 1 Timothy 6:20 (fake knowledge),
  Titus 3:10-11 e. Rebuke a wise man: Proverbs 9:8-9, 15:31 f. Rebuke a
  just man: Proverbs 9:9 STRENGTH 1. Be Strong • Deuteronomy 31:6-7,23,
  Joshua 1:6-7,9, 1 Kings 2:2, 1 Chronicles 22:13, 28:10,20, 2 Chronicles
  15:7, 32:7, Proverbs 20:29, 24:5,10, 28:1, 30:30, Isaiah 35:3-4, Haggai
  2:4, Zechariah 8:9,13, 1 Corinthians 16:13, Galatians 6:9, Ephesians
  6:10, 2 Thessalonians 3:13, 2 Timothy 2:1, Revelation 2:3 2. Encourage
  others • Isaiah 35:4, 1 Thessalonians 5:11,14 THOUGHTS 1. Meditate (to
  reflect upon: ponder) on God’s law (Word) day and night (with the
  purpose of doing what God says): • Deuteronomy 6:6,12, 8:11, 11:18,
  Joshua 1:8, Psalms 4:4, Proverbs 2:1, 3:1, 4:21, Haggai 1:5,7, Romans
  12:2, 1 Corinthians 10:15, 2 Corinthians 10:5, Ephesians 5:17,
  Colossians 3:16, 1 Timothy 4:15, 2 Timothy 2:15, 2 Peter 3:2 • How to:
  Pick Bible verses in the morning to memorize and repeatedly think on for
  the day, read the Bible, listen to the Bible, listen to sermons, etc. 2.
  Evil thoughts (thoughts/plans/desires of committing sin) • Matthew
  15:19, Mark 7:21, 1 Corinthians 13:5 (Example: Genesis 6:5) 3. Think on
  spiritual/godly things (in general): not earthly/vain things •
  Philippians 4:8; 1 Chronicles 16:12, Psalm 10:4, 15:2, 119:113, Isaiah
  26:3, Romans 8:5, Philippians 3:19 4. The thought of foolishness is sin
  • Proverbs 24:9 TRIBULATION 1. Think not that Jesus came to send peace •
  Matthew 10:34, 1 John 3:13 2. Take up your cross daily: endure
  suffering/sacrifice that comes with serving God • Matthew 10:38, 16:24,
  Mark 8:34, Luke 9: 23, 14:27, John 15:13-14, Romans 12:1, 2 Timothy 1:8,
  2:3-5, 4:5, Hebrews 13:13, 1 Peter 4:1: John 12:24 3. Don’t deny Jesus;
  Don’t be ashamed of Jesus • 2 Timothy 1:8, Matthew 10:32-33, Mark 8:38,
  Luke 9:26 1. Be ready to explain your reason for hope when suffering
  wrongfully • 1 Peter 3:15 1. Don’t premeditate what you will say in
  persecution • Matthew 10:19, Mark 13:9,11, Luke 21:14 1. Thou shalt
  consider in thine heart, that, as a man chasteneth his son, so the Lord
  thy God chasteneth thee (realize that God also allows us to go through
  trouble to correct us) • Deuteronomy 8:5, Proverbs 3:11, Hebrews 12:5
  TRUST 1. Have Faith in God • 2 Chronicles 20:20, Psalm 4:5, 37:3,5,
  62:8, 115:9-11, Proverbs 3:5-6, 16:20, 18:10, 28:25, 29:25, Isaiah 26:4,
  50:10, Mark 11:22, John 14:1, Romans 14:5,22, Galatians 5:22, Ephesians
  6:16, 1 Thessalonians 5:8, 1 Timothy 1:19, 6:11,17, 2 Timothy 2:22,
  Titus 2:2, Hebrews 3:12, 4:14, 6:11 10:22-23,35, 11:6, James 4:8 •
  Meaning: To believe everything God says Specific Mentions a. Believe
  that God rewards them that diligently seek (obey) him • Deuteronomy 7:9,
  Hebrews 11:6, Galatians 6:7, Ephesians 6:8 b. Be sure your sin will find
  you out • Numbers 32:23, Deuteronomy 7:10, Proverbs 14:16, Galatians
  6:7, Ephesians 5:6, 6:8 c. Commit your works unto the Lord (Entrust God
  to bring your desires to pass: he alone has control over results, while
  you focus on living a life pleasing to God) • Proverbs 16:3, 20:24
  d.Take no thought for your life [Believe God will provide your physical
  needs as you seek first the Kingdom of God and His righteousness] •
  Matthew 6:25,31, Luke 12:22,29 Don’t trust… 2. Your own/others
  understanding (over God’s word) • Proverbs 3:5, 14:15, 19:27, 28:26 3.
  Man (his help and word) • Psalm 60:11-12, 146:3, Jeremiah 17:5-8, Micah
  7:5-7 4. Riches • Job 31:24, Proverbs 11:28, 1 Timothy 6:17 Testing 5.
  Thou shalt not tempt the Lord thy God • Deuteronomy 6:16 Matthew 4:7,
  Luke 4:12, 1 Corinthians 10:9, Exodus 17:2,7, Psalm 78:18-22, Mark
  8:11-12, Luke 11:16,29, Hebrews 3:8,15 • Means to test; not to entice to
  do evil because He cannot be tempted with evil- James 1:13, (testing God
  out of doubt) VOWS 1. Swear not (covenant, vow, oath, promise): instead
  be a man of your word • Matthew 5:33-37, James 5:12 2. But if you swear,
  then keep your word • Leviticus 5:4, 19:12, Numbers 30:2, Deuteronomy
  23:21-23, Proverbs 20:25, Ecclesiastes 5:4-6, Zechariah 8:17 3. Father
  or husband can revoke a daughter’s/wife’s vow in the day he heard it •
  Numbers 30:2-16 WISDOM 1. Be wise • Proverbs 1:23, 3:21,
  4:5-7,13,20,23-27, 8:5-6,10,32,33-34, 9:4-5, 10:14, 15:14, 18:1,
  22:17,29, 23:19, 27:11, Matthew 10:16, Mark 7:22, Ephesians 5:10,15,17,
  2 Peter 1:5, Colossians 3:16, 4:5, • Be wise to that which is good:
  Romans 16:19, 1 Corinthians 14:20 • Be simple concerning evil (be
  ignorant of): Romans 16:19, 1 Corinthians 14:20, 1 Peter 2:1 (guile) 2.
  Be not wise in thine own eyes • Proverbs 3:7, 5:1, 26:12,16,
  Ecclesiastes 7:16, Isaiah 5:21, James 1:21, 3:13, Romans 12:16b, 1
  Corinthians 3:18 3. Redeem the time (time wasting) • Proverbs 12:11,
  28:19, Ephesians 5:16, Colossians 4:5 1. Seek/receive wise/godly council
  • Proverbs 11:14, 12:5,15, 15:22, 19:20-21, 20:5,18, 21:30, 24:6, 27:9
  5. Go to now [means to act today/now; forget the past/future: sin of
  putting off good deeds] • Proverbs 3:27-28, 27:1, Ecclesiastes 6:9,
  7:10, 11:4, Matthew 6:34, John 4:35, Philippians 3:13,15, James
  4:13,15,17, 5:1, 1 John 3:17 6. Prove all things (applicable to
  preaching, taking in information, tasks performed, etc.) • Proverbs
  14:15, 1 Thessalonians 5:21 • Prove your own work: Galatians 6:4, 2
  Timothy 4:5 WORK 1. Work • Genesis 2:15, Proverbs 20:11, Galatians 6:5,
  Haggai 2:4, Ephesians 4:28, 1 Thessalonians 4:11, 2 Thessalonians
  3:10-12 a. Type 1: Spiritual (great commission):Matthew 11:28-29 b. Type
  2: With hands: Galatians 6:5, Ephesians 4:28, 1 Thessalonians 4:11, 2
  Thessalonians 3:10-12, Proverbs 12:11, 13:23, 28:19 c. How Much: about
  72 hrs a week (a lifestyle): Exodus 20:9, John 9:4, 11:9 2. Work until
  you have enough to provide needs for you and your house (Type 2) •
  Galatians 6:5, Ephesians 4:28, 1 Thessalonians 4:12, 2 Thessalonians
  3:8,10-12, 1 Timothy 5:8 (v.4); John 6:26-27, 21:15, 1 Corinthians
  7:21-24, Matthew 6:33, Luke 12:31 Work Ethics 3. Work diligently
  (constant and earnest effort to accomplish something: no break/idle
  time) (sloth is slow/inactive) • Proverbs 10:4,26, 12:24, 13:4, 15:19,
  19:15, 20:4, 21:5,25, 22:13, 23:21, 26:13-14, 30:25-26, 28, 31:27,
  Ecclesiastes 10:18, 11:6, Romans 12:8,11a, Hebrews 6:11-12 • Be diligent
  (spiritually): Deuteronomy 4:9, 6:17, Joshua 22:5, Zechariah 6:15, 2
  Peter 1:5,10, 3:14; 1 Corinthians 15:58 (always) • Wait on your work
  (attend to it continually and nonstop): Luke 12:35-36, Romans 12:7-8a,
  Proverbs 27:18 4. Love not sleep- (excessive sleep) • Proverbs 6:9-11,
  10:5, 19:15, 20:13, 24:30-34 5. Don’t be a busybody (interfering into
  other people's matters) • 1 Peter 4:15 6. Abound in your work •
  Ecclesiastes 11:1-2, 1 Corinthians 15:58 7. Do every action as unto the
  LORD, and not unto men • Proverbs 6:6-8, 30:27, 31:13, Matthew 23:5,
  Romans 12:11, 1 Corinthians 10:31 (to glorify), Galatians 4:18b,
  Ephesians 5:22, 6:5b-7, Colossians 3:17,22-23 8. Do every action with
  all your might and strength • Deuteronomy 6:5, Ecclesiastes 9:10,
  Zephaniah 3:16, Matthew 22:37-38, Mark 12:30, Luke 10:27 9. Do every
  action with all one's mind, soul, heart (singleness of heart, not double
  minded, rather wholeheartedly) • Deuteronomy 6:5, 10:12, 11:13, Matthew
  22:37-38, Mark 12:30, Luke 10:27, Romans 12:11, Galatians 4:18,
  Ephesians 6:5b-6, Colossians 3:22-23, 1 Peter 1:22, 4:8 Work Place 1.
  Masters don’t oppress your servants (treat them fairly: justice and
  equity) • Deuteronomy 24:14, Job 31:13, Ephesians 6:9, Colossians 4:1 2.
  Discipline your servants (not delicately) • Proverbs 29:19,21 3.
  Servants please their masters well in all things (fulfill their desires:
  more than that which is asked) • Titus 2:9 MISC. 1. Seek God • 1
  Chronicles 16:11, 22:19, 28:9, Psalm 105:4, Isaiah 55:6-7, Amos 5:4,6,8,
  Zephaniah 2:3, Colossians 3:1 2. Walk before God • Genesis 17:1, 1
  Samuel 2:30, James 4:8. Meaning: (lit.) to walk in God’s presence.
  Application would be to acknowledge God’s presence (ex- Psalm 145:18) 3.
  Be Perfect • Genesis 17:1, Deuteronomy 18:13, Matthew 5:48, 2
  Corinthians 13:11 4. Follow Jesus • Matthew 4:19, 8:22, 16:24, 19:21,
  Mark 1:17, 8:34, Luke 5:27, 9:59, John 1:43, 21:19, Ephesians 5:1,
  Colossians 2:6-7, Hebrews 12:2, 1 Peter 2:21 5. Serve God • Exodus
  23:25, Deuteronomy 6:13, 10:20, Joshua 24:14, 1 Samuel 12:20-21,24,
  Hebrews 12:28 6. Abide (be Steadfast) • John 15:4, 1 John 2:24,28; 1
  Corinthians 15:58, 16:13, Philippians 4:1, 2 Thessalonians 2:15,
  Revelation 2:10,25, 3:5 7. Be temperate (self-controlled and moderate) •
  Galatians 5:23, Philippians 4:5, Titus 1:8, 2:2, 2 Peter 1:6 8. Be holy
  • Leviticus 11:44, 19:2, 20:7, Romans 12:1, 1 Timothy 1:9, 2:8, Titus
  1:8, 2:3, Hebrews 12:14, 1 Peter 1:14-16 9. Be clean (spiritually) •
  Proverbs 30:12, Isaiah 1:16, 2 Corinthians 7:1, James 4:8 10. Be filled
  with the Spirit; Walk in the Spirit; Quench not (don’t put out) the
  Spirit • Galatians 5:16, Ephesians 4:22-24,30, 5:8,18, 1 Thessalonians
  5:19 1. Resist the devil • James 4:7, 1 Peter 5:8-9
</div>
</main>
</body>

</html>