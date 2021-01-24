<link rel="stylesheet" href=" {{ asset('css/test-css.css') }} ">

<div class="parent">
  （div）parent 親要素
  <div class="child">
  （div）child 子要素
    <div class="grand-child">
    （div）grand-child孫要素
      <p class="great-grandchild">（p）great-grandchild ひ孫要素</p>
      <span class="great-grandchild-sapn">（span）great-grandchild ひ孫要素</span>
    </div>
  </div>
  <p class="child-brother">（p）child-brother 子の兄弟</p>
  <span class="child-brother-span">（span）child-brother 子の兄弟</p>
</div>