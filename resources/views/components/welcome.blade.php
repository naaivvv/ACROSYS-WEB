
<style>

.parent {
display: grid;
grid-template-columns: repeat(4, 1fr);
grid-template-rows: repeat(5, 1fr);
grid-column-gap: 1rem;
grid-row-gap: 1rem;
}

.div1 { grid-area: 1 / 1 / 2 / 2; }
.div2 { grid-area: 1 / 2 / 2 / 3; }
.div3 { grid-area: 1 / 3 / 2 / 4; }
.div4 { grid-area: 1 / 4 / 2 / 5; }
.div5 { grid-area: 2 / 1 / 4 / 3; }
.div6 { grid-area: 4 / 1 / 6 / 3; }
.div7 { grid-area: 2 / 3 / 6 / 5; }

</style>
<div class="parent p-6 lg:p-8 max-h-full ">
        <div class="div1 bg-white border-b border-gray-200 sm:p-6 lg:p-8 overflow-hidden shadow-xl sm:rounded-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, error cupiditate facere id ipsum, fuga architecto facilis quasi vitae, eos dolore accusantium mollitia vero animi! Omnis assumenda repudiandae vitae harum?</div>
        <div class="div2 bg-white border-b border-gray-200 sm:p-6 lg:p-8 overflow-hidden shadow-xl sm:rounded-lg">Rerum inventore incidunt ex nobis fuga eos rem repudiandae dolore officia soluta nulla excepturi veniam earum sit exercitationem voluptas ad quos, aperiam recusandae, doloribus mollitia consequuntur modi? Officiis, praesentium placeat.</div>
        <div class="div3 bg-white border-b border-gray-200 sm:p-6 lg:p-8 overflow-hidden shadow-xl sm:rounded-lg">Quia nisi, pariatur officia incidunt, id nobis accusantium quod corrupti repudiandae mollitia recusandae excepturi, illo tenetur eaque est ipsum. Repellendus eligendi nisi placeat quod vel rem eveniet illum explicabo voluptatibus?</div>
        <div class="div4 bg-white border-b border-gray-200 sm:p-6 lg:p-8 overflow-hidden shadow-xl sm:rounded-lg">Voluptates, facere ad. Magnam voluptatibus sint dicta. Labore veniam commodi nemo fugiat nam provident voluptas, atque, quam et dolorum maxime. Id est ad cupiditate corporis voluptatum maiores quibusdam vel laborum!</div>
        <div class="div5 bg-white border-b border-gray-200 sm:p-6 lg:p-8 overflow-hidden shadow-xl sm:rounded-lg h-full">
                <x-area-chart-users />
        </div>
        <div class="div6 bg-white border-b border-gray-200 sm:p-6 lg:p-8 overflow-hidden shadow-xl sm:rounded-lg">Eligendi ipsum possimus quibusdam exercitationem, fugiat, dicta natus corporis libero est a deleniti dolorum quasi at amet fugit blanditiis vitae aspernatur repellendus eos culpa totam eius aperiam porro. Ab, doloremque.</div>
        <div class="div7 bg-white border-b border-gray-200 sm:p-6 lg:p-8 overflow-hidden shadow-xl sm:rounded-lg">Modi alias consequatur consectetur, nobis rem dolore minima molestias praesentium unde ab laboriosam esse doloribus deleniti magni, porro quod animi quaerat quis autem quae obcaecati exercitationem a illo. Eligendi, id!</div>
</div>
