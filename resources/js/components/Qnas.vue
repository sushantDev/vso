<template>
    <div class="accordion" id="accordionQna">
        <div class="card" v-for="qna in qnas">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link " type="button" data-toggle="collapse"
                            :data-target="'#' + qna.slug"
                            aria-expanded="true" aria-controls="collapseOne">
                        {{ qna.question }}
                    </button>
                </h2>
            </div>

            <div :id="qna.slug" class="collapse" :aria-labelledby="qna.slug" data-parent="#accordionQna">
                <div class="card-body">
                    {{ qna.answer }}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
  export default {
    props: [
      'qnas'
    ]
  };
</script>
