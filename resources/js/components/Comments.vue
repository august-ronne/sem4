<template>
    <div class="content-container">
        <h2 class="comments-section-header">Comments</h2>
        <form v-if="this.user" @submit.prevent="addComment">
            <textarea placeholder="Write your comment here..." v-model="comment.body"></textarea>
            <button type="submit" class="submit-comment-button">Submit Comment</button>
        </form>
        <div class="comment-container" v-for="comment in comments" v-bind:key="comment.id">
            <h3>Comment Author: {{ comment.user_email }}</h3>
            <p>{{ comment.body }}</p>
            <button v-if="getUser() == comment.user_email" @click="deleteComment(comment.id)"
                    class="delete-comment-button">
                DELETE
            </button>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['recipe', 'user'],
        data() {
            return {
                comments: [],
                comment: {
                    id: '',
                    body: '',
                    user_email: this.user,
                    comment_recipe: this.recipe,
                },
                comment_id: '',
            }
        },

        created() {
            this.fetchComments(this.recipe);
        },

        methods: {
            getUser() {
                return this.user;
            },
            fetchComments(recipe) {
                fetch(`/api/comments/${recipe}`)
                    .then(res => res.json())
                    .then(res => {
                        this.comments = res.data;
                    })
            },
            deleteComment(id) {
                fetch(`/api/comment/${id}`, {
                    method: 'delete'
                })
                    .then(res => res.json())
                    .then(data => {
                        alert('Comment removed.');
                        this.fetchComments(this.recipe);
                    })
                    .catch(err => console.log(err));
            },
            addComment() {
                fetch('/api/comment', {
                    method: 'POST',
                    body: JSON.stringify(this.comment),
                    headers: {
                        'content-type': 'application/json'
                    }
                })
                    .then(res => res.json())
                    .then(data => {
                        this.comment.body = '';
                        this.fetchComments(this.recipe);
                    })
                    .catch(err => console.log(err));
            }
        }
    }
</script>