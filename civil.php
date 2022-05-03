<?php include_once 'header.php'; ?>
<!-- FLOAT MENU START -->
<div class="float-menu active">
  <div class="float-toggle active"></div>
  <ul>

    <?php

    $query = "SELECT * FROM categories WHERE cat = 'Civil Law'";
    $result = mysqli_query($conn, $query);
    $output = '';
    while ($row = mysqli_fetch_array($result)) {
      $output .= '<li><a href="#' . $row['section_id'] . '">' . $row['link_text'] . '</a></li>';
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
  <h2>Civil Laws</h2>
  <h3>CRIMES</h3>
  <ol>
    <li>
      <span class="main-li">Role of Governmental bodies</span>
      <ul class="styled">
        <li>
          The role of the government is giving (fair) punishment to
          evildoers and to praise those that do well; life for life, eye
          for eye, tooth for tooth, hand for hand, foot for foot
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Deuteronomy 19:21">Deuteronomy 19:21</span>
              <span class="modal-verse" id="Proverbs 11:10">Proverbs 11:10</span>
              <span class="modal-verse" id="Proverbs 14:34">14:34</span>
              <span class="modal-verse" id="Proverbs 20:8">20:8</span>
              <span class="modal-verse" id="Proverbs 20:26">20:26</span>
              <span class="modal-verse" id="Proverbs 21:11">21:11</span>
              <span class="modal-verse" id="Proverbs 25:5">25:5</span>
              <span class="modal-verse" id="Romans 13:1-7">Romans 13:1-7</span>
              <span class="modal-verse" id="1 Peter 2:14">1 Peter 2:14</span>
            </li>
          </ul>
        </li>
        <li>
          Three main types of punishments: Fines, Death Penalty, and Flogging
        </li>
      </ul>
    </li>
    <li>
      <span class="main-li">Death Penalty Crimes</span>
      <ul class="styled">
        <li>
          Purpose of the death penalty is to make a public example and requires extreme evidence
          <ul class="sub">
            <li>
              <span class="modal-verse" id="Matthew 1:19">Matthew 1:19</span>
            </li>
          </ul>
        </li>
        <li>
          Religious death penalty crimes do not point to forced conversion but rather a ban on certain religions/practices and citizens are allowed to believe whatever they want
        </li>
        <li>
          Murder
        </li>
        <ul class="sub">
          <li>
            <span class="modal-verse" id="Genesis 9:6">Genesis 9:6</span> ,
            <span class="modal-verse" id="Exodus 21:12">Exodus 21:12</span> ,
            <span class="modal-verse" id="Exodus 21:14">21:14</span> ,
            <span class="modal-verse" id="Exodus 21:20">21:20</span> ,
            <span class="modal-verse" id="Exodus 21:22-23">21:22-23</span> ,
            <span class="modal-verse" id="Exodus 21:29">21:29</span> ,
            <span class="modal-verse" id="Leviticus 20:2">Leviticus 20:2</span> ,
            <span class="modal-verse" id="Leviticus 24:17">24:17</span> ,
            <span class="modal-verse" id="Numbers 35:16-18">Numbers 35:16-18</span> ,
            <span class="modal-verse" id="Numbers 35:21">35:21</span> ,
            <span class="modal-verse" id="Numbers 35:30">35:30</span> ,
            <span class="modal-verse" id="Deuteronomy 19:11-13">Deuteronomy 19:11-13</span> ,
            <span class="modal-verse" id="2 Samuel 12:9">2 Samuel 12:9</span> ,
            <span class="modal-verse" id="Proverbs 28:17">Proverbs 28:17</span> ,
            Includes abortion: <span class="modal-verse" id="Exodus 21:22-23">Exodus 21:22-23</span>
          </li>
        </ul>
      </ul>
    </li>
  </ol>
  <br />
  2. Man-stealing (kidnapping, illegal slavery, human trafficking): Exodus
  21:16, Deuteronomy 24:7 3. Bestiality: Exodus 22:19, Leviticus 20:15-16.
  4. Sodomy: Leviticus 20:13, Romans 1:32, 2 Peter 2:6 5. Forcing someone
  (Rape): Deuteronomy 22:25-27, Matthew 18:6, Mark 9:42, Luke 17:2 (Note:
  this would also include pedophilia as a type of rape because children
  are legally not able to consent- 1 Corinthians 7:36: she must “pass the
  flower of her age”) 6. Adultery with a married/betrothed woman:
  Leviticus 20:10,20-21 Deuteronomy 22:22-24, Job 31:9-11: stoned to death
  with stones 7. Lying about your virginity to your father and new husband
  (public example): Deuteronomy 22:13-21 8. Incest (in-law or genetic or
  others’ near of kin): Leviticus 18:29, 20:11-12,14,17,20-21 1
  Corinthians 5:1-5: both of them would be burnt with fire 9. Witchcraft
  or Wizardry and belonging to an Occult group: Exodus 22:18, Leviticus
  20:27 10. Worshipping, serving, or sacrificing to false gods (devils,
  idols): Exodus 22:20, Leviticus 18:21, 20:2, Deuteronomy 17:3-5,7, Job
  31:26-28, Ezekiel 9:4-7, 14:10: stone them 11. Teaching to serve other
  gods: Deuteronomy 13:1-11. stone them. 12. Speaking in the name of other
  gods: Deuteronomy 18:20, Ezekiel 14:10 13. Lying about receiving words
  from God (false prophesies): Deuteronomy 18:20-22, Zechariah 13:3 14.
  Blaspheming the name of the LORD: Leviticus 24:16: stone them 15.
  Cursing your parents: Exodus 21:17, Leviticus 20:9, Proverbs 20:20,
  Matthew 15:4 16. Striking or Attacking your parents: Exodus 21:15 17.
  Gluttonous and drunkard son refusing to obey his parents after being
  chastened by them: Deuteronomy 21:18-21 18. Rejecting the verdict of the
  judge who speaks from God’s law: Numbers 15:30-31, Deuteronomy 17:11-13,
  Hebrews 10:28 19. A False witness who testifies falsely over a death
  penalty case with intent of getting the accused man a death penalty:
  Deuteronomy 19:16-21 Perjury 1. If one is found to be a false witness he
  shall be given the same punishment that he thought to have done to the
  person he witnessed against (generally- beating, fine, or Death Penalty)
  • Deuteronomy 19:16-19 Manslaughter (accidental killing) 1. And if a man
  lie not in wait, but God deliver him into his hand; then I will appoint
  thee a place whither he shall flee • Exodus 21:13, Numbers 35:6-34,
  Deuteronomy 4:41-42, 19:2-10-12, Joshua 20:2-6 Indirect, Negligent
  Homicide 1. Killing someone without intent, and not directly, but
  through negligence and irresponsibility (this is not manslaughter
  because it is not direct or there is uncertainty as to who caused the
  death) equals pay fine or ransom for your life. (note: Numbers 35:31-32)
  • Exodus 21:22(unclear who caused),30-32(no intent), Deuteronomy 22:8 No
  Fault Deaths 1. Self Defense: If a thief be found breaking up, and be
  smitten that he die, there shall no blood be shed for him • Exodus 22:2
  • Meaning: this verse is talking about a thief who breaks in at night.
  You are permitted to kill him in order to protect your family 2. If the
  revenger of blood kills the man slayer, outside a designated city of
  refuge, he isn’t guilty of a crime • Numbers 35:26-28 • This is later
  defined as the government’s role: Romans 13:4 3. If an animal (non-wild)
  kills someone and the owner showed no negligence: kill the animal but
  owner goes free • Exodus 21:28 Violence causing injury 1. Causing
  injury: pay their medical expense and loss of work time • Exodus
  21:18-21, Deuteronomy 27:24 2. But if you cause a blemish: as he has
  done, so shall it be done to him • Exodus 21:24-25, Leviticus 24:19-20,
  Deuteronomy 25:11-12 3. And if a Master causes a blemish to his servant
  then the servant goes free • Exodus 21:26-27 PROPERTY Idolatry Ban 1.
  Destroy idols, altars and groves • Exodus 23:24, 34:13, Numbers 33:52,
  Deuteronomy 7:5,25, 12:2-4, 13:17. Other mentions: Deuteronomy 16:21-22
  Theft 1. Thief restores 5 oxen for an ox that is killed and sold •
  Exodus 22:1 2. Thief restores 4 sheep for a sheep that is killed and
  sold • Exodus 22:1, 2 Samuel 12:6 3. Thief restores 2 times the value of
  all other stolen property (including if you borrow goods and it is
  stolen from you; you pay if the thief is not found) • Exodus 22:4,7-9,12
  Debt 1. If a thief can’t pay his fine, then he is sold as a servant for
  his theft (in order to pay off the debt) • Exodus 22:3 Property Damage
  1. Restitution for property damage when it’s your fault • Exodus
  21:33-36, 22:5-6,14, Leviticus 24:18,21 2. No Restitution for property
  damage when it’s not your fault • Exodus 22:10-11,13,15 PROCEDURES Civil
  Authorities 1. Judges and officers shalt thou make thee in all thy
  gates, which the Lord thy God giveth thee, throughout thy tribes (God
  set up 70 elders and officers under Moses to bear the burden of the
  people)- to judge the people at all times • Numbers 11:16, Deuteronomy
  1:13, 16:18 2. Bring complicated court cases to Moses (highest judge-
  like supreme court) • Deuteronomy 1:17, 17:8-10 3. Must be known in the
  tribes (officers and elders) • Numbers 11:16, Deuteronomy 1:13,15 4.
  Must be wise • Deuteronomy 1:13, Proverbs 28:2,16 5. Must rule in the
  fear of God • 2 Samuel 23:3, Proverbs 29:2 6. Must be just (see moral
  laws of justice or equity) • 2 Samuel 23:3, Proverbs 16:12 Requirements
  for Kings (Judicial + Legislative + Executive) 1. One from among thy
  brethren, not a stranger • Deuteronomy 17:15, Jeremiah 30:21 2. He shall
  not multiply horses to himself; neither shall he greatly multiply to
  himself silver and gold (covetousness/personal enrichment) 1.
  Deuteronomy 17:16-17, Proverbs 28:16 3. Neither shall he multiply wives
  to himself (sin of polygamy) 1. Deuteronomy 17:17 4. Must write out a
  copy of the Bible; keep it with him; and read it all the days of his
  life • Deuteronomy 17:18; Deuteronomy 17:19, Ephesians 6:17; Deuteronomy
  17:19, Acts 17:11 Judicial Procedure 1. Requires diligent investigation
  • Deuteronomy 13:14, 17:4, 19:18, Proverbs 18:17 2. Judgement must be
  certain before execution (beyond reasonable doubt) • Deuteronomy 13:14,
  17:4 3. Punishment requires 2 witnesses • Numbers 35:30, Deuteronomy
  17:6, 19:15 • Note: an object can be a witness: Exodus 22:13 Executive
  Procedure 1. The witnesses are the first ones to put the guilty to
  death, then all the people would do the same • Deuteronomy 13:9, 17:7 2.
  The revenger of blood is the one who slays the murder • Numbers 35:19,21
  • Note: the revenger of blood operates as a government executor: Romans
  13:4 3. Unsolved murder (region held responsible to investigate) •
  Deuteronomy 21:1-9 4. His (the one given the death penalty) body shall
  not remain all night upon the tree, but thou shalt in any wise bury him
  that day • Deuteronomy 21:22-23 Flogging 1. Criminals are beaten in the
  presence of the judge • Deuteronomy 25:2 2. Maximum flogging is 40
  stripes • Deuteronomy 25:3 3. When to use (not specified): on fools (for
  harming others) • Deuteronomy 22:18-19, Proverbs 10:13, 18:6, 19:25,29,
  26:3 Inheritance (land that goes out in the Jubilee) 1. Thou shalt not
  remove thy neighbor’s landmark • Deuteronomy 19:14, 27:17, Proverbs
  22:28, 23:10-11 2. Inheritance chain: First sons, then daughters, then
  brethren, then father’s brethren, then nearest kinsman (Stays in the
  family) • Numbers 27:8-11, Joshua 17:3-6, Job 42:15, Ezekiel 46:16-18 3.
  Firstborn son gets double portion • Deuteronomy 21:15-17 4. Inheritance
  doesn’t switch between tribes, so if a woman inherits the land then she
  must marry someone from her tribe • Numbers 36:6 5. Sister in law: no
  children • Deuteronomy 25:5-10 (voluntary) the purpose is to give one's
  brother a seed so that his house remains i.e. a child so that his
  properties can be inherited) 6. Land given to immigrants who beget
  children in the land (unclaimed) • Ezekiel 47:22-23 • Biblical
  Principle: A high population is good for a nation (Proverbs 14:28): A
  strong country will have a high fertility rate and/or many immigrants.
  Note: Ezekiel is referring to a time when they were redistributing the
  land to be settled again. Marriage 1. Let him write her a bill of
  divorcement (marriage is also a legal construct which gives the
  government legal authority to prohibit divorce and remarriages based on
  mosaic prohibitions) • Deuteronomy 24:1,3, Romans 7:2 Fine for
  fornication 1. Pay a dowry/fine for marrying or lying with a virgin: 50
  shekels of silver • Exodus 22:17, Deuteronomy 22:29 SABBATH YEARS Note:
  started once they entered the Promised Land. Leviticus 25:2 1. The law
  is read every year of release at the feast of tabernacles to all the
  people in the land • Deuteronomy 31:9-13, Nehemiah 8:1-18 Land Rested 1.
  Work the land 6 years • Exodus 23:10, Leviticus 25:3 2. The 7th year:
  thou shall let the land rest and lie still (no sowing, reaping, pruning,
  gathering) • Exodus 23:11, Leviticus 25:4-5,20 • The increase of the
  land shall be food for all people and animals therein (including poor
  people who want to eat from someone’s land) • Leviticus 25:6-7 Debts are
  forgiven 3. Every creditor that lends ought unto his neighbor shall
  release it (except for foreigners) (“exact” means to demand a payment:
  Isaiah 58:3, Luke 3:13) • Deuteronomy 15:1-3 JUBILEE Note: this is in
  alignment with the Sabbath Years 1. The 50TH year shall be a jubilee •
  Leviticus 25:11,12 2. Ye shall hallow the 50TH year • Leviticus
  25:8,10,12 3. Blow the trumpet of Jubilee on the day of atonement •
  Leviticus 25:9 4. Proclaim liberty throughout the land unto all the
  inhabitants thereof • Leviticus 25:10 Land Rested 1. Ye shall not sow,
  neither reap (wild or domestic produce) Leviticus 25:11 2. Eat the
  increase out of the field • Leviticus 25:12 3. Eat of the old food and
  storage of the 6TH year until the 9TH year when harvest comes •
  Leviticus 25:20-22 Land returned to original owner 1. Return everyman
  unto his possession (the possession of his father's) (fields and
  un-walled cities) • Leviticus 25:10,13,28,31,41, 27:24, Ezekiel 46:16-18
  2. You (or your family member) can redeem (buy back) the land you sold
  (else it goes back during jubilee) • Leviticus 25:14-16,23-28 3. Land
  and homes within a walled city: you have 1 year to redeem it else the
  buyer gets to keep it forever (doesn’t go out in jubilee) • Leviticus
  25:29-31 Servants Freed 1. All the inhabitants of the land go free in
  the year of jubilee • Leviticus 25:10,39-41,54 (with stated exceptions)
  2. Servants can be redeemed at any point by them or their family •
  Leviticus 25:47-55 SERVANTS 1. Don’t return runaway slaves/servants •
  Deuteronomy 23:15-16 (example: Philemon 1:16) Hebrew servants 1. Redeem
  (buy/pay for) your brother to dwell with you • Leviticus 25:35 2. They
  shall not serve or be sold as a bondservant, but shall serve as a hired
  servant, and a sojourner • Leviticus 25:39-40,42,53, Deuteronomy 15:15
  3. Thou shalt not rule over them with rigor • Leviticus 25:43,46,53 4.
  Hebrew servants are held for a maximum of 6 years • Exodus 21:2,
  Deuteronomy 15:12,18, Jeremiah 34:8-16 • It shall not seem hard unto
  thee: Deuteronomy 15:18 5. You must send him out liberally • Deuteronomy
  15:13-14 6. Or the servant gets the option to stay with his Master
  (signified by an awl through the ear) • Exodus 21:5-6, Deuteronomy
  15:16-17 Bondmen 1. Shall be of the heathen roundabout or of the
  children of strangers that do sojourn in the land or of the families
  that are residing in the land (of those may be bought to be a bondman or
  bondmaiden to be a possession forever) • Leviticus 25:42-46 (note: these
  people were to assimilate and become citizens: Genesis 17:12-13, Exodus
  12:44,48 Servant girl you marry (concubine-secondary def.) 1. The 6-year
  limit and Jubilee doesn’t apply: Exodus 21:7 (because she’s your wife)
  2. Can’t sell her after you marry her: Exodus 21:8, Deuteronomy 21:14 3.
  She goes free if: • you don’t delight in her: Exodus 21:8, Deuteronomy
  21:14, OR • you don’t give her food, clothing, and duty of marriage:
  Exodus 21:9-11 4. Her adultery is not punished by death but with a
  beating: Leviticus 19:20-22 5. If a man marries your servant girl, then
  he has to redeem her and her children for their freedom: Exodus 21:3-4
  6. Captive in war: she shall shave her hair, pare her nails, and bewail
  her father and mother for one month before marrying: Deuteronomy
  21:10-13 WARFARE Note: Excessive or unprovoked warfare creates long term
  enemies and is often the downfall of nations: Deuteronomy 25:17-19,
  Habakkuk 2:5-12, James 4:1 Preperation 1. For by wise counsel thou shalt
  make thy war • Proverbs 11:14, 20:18, 24:6 2. Be prepared for war (as a
  nation) • Proverbs 21:22,31, Ezekiel 38:7 3. Be armed (have a weapon) •
  Deuteronomy 3:18, Psalm 149:6, Luke 22:36,38 Organized Military 4. When
  the officers have made an end of speaking to the people then they make
  captains of armies to lead the people: Deuteronomy 3:20, 20:9, Proverbs
  30:27, Numbers 1:4, 31:14,48, Joel 3:9-10, Micah 5:1 • Note: No standing
  army; army only organizes after the call to war and then disbands
  afterwards Alarm 5. Blow an alarm when you need to gather all the people
  (especially for war) Numbers 10:1-10, 31:6, Joel 2:1,15-16, 3:11
  Sanitary Camping 6. Have a shovel; bury your excrement in a designated
  area • Deuteronomy 23:12-14 Enlistment Requirements 7. For males 20
  years and up (Numbers 1:3) 8. Excluded if you have built a new house and
  have not dedicated it: Deuteronomy 20:5 9. Excluded if you have planted
  a vineyard and have not yet eaten of it: Deuteronomy 20:6 10. Excluded
  if you are betrothed to a woman and have not taken her or are newly
  married: within the first year: Deuteronomy 20:7, 24:5 11. Excluded if
  you are fearful and fainthearted: Deuteronomy 20:8 Attitude for war 12.
  Be not afraid of your enemies- trust that God is on your side •
  Deuteronomy 20:1 • Deuteronomy 9:3-6 (answers why), 7:17-19,21 13.
  Encourage soldiers for battle • Deuteronomy 20:2-4 Cities afar off 14.
  Option 1: peace agreement; they become tributaries (Deuteronomy
  20:10-11) 15. Option 2: war; smite every male; take spoil (Deuteronomy
  20:12-15) • Note: killing women and children is prohibited Internal
  Rebellion 16. City given to idolatry results in civil war (Deuteronomy
  13:12-17): destroy, burn, and don’t build again Spoils of War 17. Eat
  plundered food (fruit trees, land, etc.): Deuteronomy 20:14,19-20 18.
  Utilize their resources as weapons/equipment (trees to bulwarks):
  Deuteronomy 20:20 19. Take all the rest for a reward (women, children,
  cattle, possessions): Deuteronomy 20:14, Nahum 2:9 20. Divide spoil into
  two halves (1 for the soldiers directly involved, 1 for all the
  congregation): Numbers 31:25-27 21. Dedicate a tribute to the Lord
  (1/500th of the soldiers spoil and 1/50th of the congregation’s spoil):
  Numbers 31:28-30
</div>
</main>
</body>

</html>