<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category One">Category 1</option>
                <option value="Category One">Category 2</option>
                <option value="Category One">Category 3</option>
                <option value="Category One">Category 4</option>
                <option value="Category One">Category 5</option>
            </select>
        </div>

        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Filter One">Filter 1</option>
                <option value="Filter One">Filter 2</option>
                <option value="Filter One">Filter 3</option>
                <option value="Filter One">Filter 4</option>
                <option value="Filter One">Filter 5</option>
            </select>
        </div>

        <div class="w-2/3 relative">

            <input type="search" placeholder="Find an idea" class="w-full rounded-xl bg-white
           border-none placeholder-gray-900 px-4 py-2 pl-8">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>

        </div>

    </div>

    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 font-bold text-xxs uppercase
                     hover:border-gray-400 transition duration-150 ease-in rounded-xl px-4 py-3">Vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img
                        src="https://images.unsplash.com/photo-1597223557154-721c1cecc4b0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80"
                        alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can do here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus accusantium amet
                        blanditiis consectetur consequuntur cupiditate deserunt distinctio ea eius eveniet
                        exercitationem expedita inventore ipsa laboriosam molestias non officia, omnis, placeat porro
                        quam quisquam rem sed soluta tenetur veritatis vero vitae! Asperiores, dolor dolorem, doloribus
                        eaque eius est eveniet magnam maiores natus nisi omnis qui quo ratione sit tenetur ullam
                        voluptates! Fuga laborum magnam, modi quaerat tenetur unde voluptate? Aliquid, architecto cumque
                        cupiditate distinctio dolore dolorum eaque earum ex facere inventore iure iusto laborum maxime
                        molestiae nobis obcaecati quasi quod rerum sapiente similique sunt suscipit tenetur ut veniam
                        voluptas voluptatum.
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comments</div>
                        </div>

                        <div class="flex items-center space-x-2">
                            <div class="relative bg-gray-200 text-xxs font-bold uppercase leading-none
                            rounded-full text-center w-28 h-7 py-2 px-4">Open</div>

                            <button class="bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in  px-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" >
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                                        />
                                </svg>
                                <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl
                                py-3 ml-6">
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150
                                     ease-in px-5 py-3 ">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150
                                     ease-in px-5 py-3 ">Delete post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
