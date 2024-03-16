
<style>

.parent {
display: grid;
grid-template-columns: repeat(4, 1fr);
grid-template-rows: repeat(5, 1fr);
grid-column-gap: 12px;
grid-row-gap: 12px;
}

.div1 { grid-area: 1 / 1 / 2 / 2; }
.div2 { grid-area: 1 / 2 / 2 / 3; }
.div3 { grid-area: 1 / 3 / 2 / 4; }
.div4 { grid-area: 1 / 4 / 2 / 5; }
.div5 { grid-area: 2 / 1 / 4 / 3; }
.div6 { grid-area: 4 / 1 / 6 / 3; }
.div7 { grid-area: 2 / 3 / 6 / 5; }

</style>
<div class="parent p-6 lg:p-8 max-h-full bg-white border-b border-gray-200">
        <div class="div1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, error cupiditate facere id ipsum, fuga architecto facilis quasi vitae, eos dolore accusantium mollitia vero animi! Omnis assumenda repudiandae vitae harum?</div>
        <div class="div2">Rerum inventore incidunt ex nobis fuga eos rem repudiandae dolore officia soluta nulla excepturi veniam earum sit exercitationem voluptas ad quos, aperiam recusandae, doloribus mollitia consequuntur modi? Officiis, praesentium placeat.</div>
        <div class="div3">Quia nisi, pariatur officia incidunt, id nobis accusantium quod corrupti repudiandae mollitia recusandae excepturi, illo tenetur eaque est ipsum. Repellendus eligendi nisi placeat quod vel rem eveniet illum explicabo voluptatibus?</div>
        <div class="div4">Voluptates, facere ad. Magnam voluptatibus sint dicta. Labore veniam commodi nemo fugiat nam provident voluptas, atque, quam et dolorum maxime. Id est ad cupiditate corporis voluptatum maiores quibusdam vel laborum!</div>
        <div class="div5">Molestiae, porro laborum. Exercitationem, et iste tempore voluptas tempora laudantium ipsa, asperiores, voluptatibus nesciunt necessitatibus quam dolores cupiditate debitis? Pariatur vel reiciendis ullam sunt amet veniam necessitatibus obcaecati eveniet accusantium.</div>
        <div class="div6">Eligendi ipsum possimus quibusdam exercitationem, fugiat, dicta natus corporis libero est a deleniti dolorum quasi at amet fugit blanditiis vitae aspernatur repellendus eos culpa totam eius aperiam porro. Ab, doloremque.</div>
        <div class="div7">Modi alias consequatur consectetur, nobis rem dolore minima molestias praesentium unde ab laboriosam esse doloribus deleniti magni, porro quod animi quaerat quis autem quae obcaecati exercitationem a illo. Eligendi, id!</div>
    {{-- <div class="grid grid-cols-4 grid-rows-5 gap-4">
        <div class="bg-gray-300 p-4 max-w-xs mx-auto justify-center items-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae nesciunt ad autem accusamus saepe illum commodi eveniet distinctio aut exercitationem, perspiciatis temporibus ea, adipisci pariatur sunt, deleniti illo aliquam porro!</div>
        <div class="bg-gray-300 p-4 max-w-xs mx-auto justify-center items-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta porro quas ea minima. Minima nostrum, nemo laudantium ad voluptas vero magnam quisquam officiis aperiam nulla sunt voluptatem repellat itaque praesentium.</div>
        <div class="bg-gray-300 p-4 max-w-xs mx-auto justify-center items-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta porro quas ea minima. Minima nostrum, nemo laudantium ad voluptas vero magnam quisquam officiis aperiam nulla sunt voluptatem repellat itaque praesentium.</div>
        <div class="bg-gray-300 p-4 max-w-xs mx-auto justify-center items-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta porro quas ea minima. Minima nostrum, nemo laudantium ad voluptas vero magnam quisquam officiis aperiam nulla sunt voluptatem repellat itaque praesentium.</div>
        <div class="bg-gray-300 p-4 col-span-2 row-span-2 max-w-xl mx-auto justify-center items-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta porro quas ea minima. Minima nostrum, nemo laudantium ad voluptas vero magnam quisquam officiis aperiam nulla sunt voluptatem repellat itaque praesentium.</div>
        <div class="bg-gray-300 p-4 col-span-2 row-span-2 max-w-xl mx-auto justify-center items-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta porro quas ea minima. Minima nostrum, nemo laudantium ad voluptas vero magnam quisquam officiis aperiam nulla sunt voluptatem repellat itaque praesentium.</div>
        <div class="bg-gray-300 p-4 col-span-2 row-span-4 max-w-xl mx-auto justify-center items-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta porro quas ea minima. Minima nostrum, nemo laudantium ad voluptas vero magnam quisquam officiis aperiam nulla sunt voluptatem repellat itaque praesentium.</div>
    </div> --}}
</div>
