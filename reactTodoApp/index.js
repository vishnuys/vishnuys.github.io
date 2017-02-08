class Todo extends React.Component{
	constructor(){
		super();
		this.state={editing: false};
	}
	getColor(){
		var colors = ["black", "grey","orange", "blue-grey", "deep-orange", "amber", "yellow", "lime", "light-green", "green", "teal", "cyan", "light-blue", "blue", "indigo", "deep-purple", "purple", "pink", "red"];
		return colors[Math.floor(Math.random()*colors.length)]
	};

	editTodo(){
		this.setState({editing: true});
	};

	updateTodo(){
		console.log("Updating todo: "+this.props.index);
		var newTodo = $("#editedTodo").val();
		this.props.updateTodo(newTodo, this.props.index);
		this.setState({editing: false});
	};

	cancelEdit(){
		this.setState({editing: false});
	}

	removeTodo(){
		console.log("Removing todo: "+this.props.index);
		this.props.deleteTodo(this.props.index);
	}

	render() {
		if (this.state.editing) {
			return (
				<div className="col s6 m3">
					<div className={"card z-depth-5 " + this.getColor()}>
						<div className="card-content white-text">
							<div class="input-field">
								<input id="editedTodo" type="text" class="validate" defaultValue={this.props.children}/>
							</div>
						</div>
						<div className="card-action">
							<a onClick={() => this.updateTodo()} className="btn waves-effect waves-light light-green z-depth-5">Save</a>
							<a onClick={() => this.cancelEdit()} className="btn waves-effect waves-light amber right z-depth-5">Cancel</a>
						</div>
					</div>
				</div>
			);
		} 
		else{
			return (
				<div className="col s6 m3">
					<div className={"card z-depth-5 " + this.getColor()}>
						<div className="card-content white-text">
							<p className="white-text center-align">{this.props.children}</p>
						</div>
						<div className="card-action">
							<a onClick={() => this.editTodo()} className="btn waves-effect waves-light light-green z-depth-5">Edit</a>
							<a onClick={() => this.removeTodo()} className="btn waves-effect waves-light amber right z-depth-5">Delete</a>
						</div>
					</div>
				</div>
			);
		};
		
	}
};
class TodoList extends React.Component{
	constructor(){
		super();
		this.state = {todoList: ["Some Val"]};
	}

	addTodo(){
		$("#newTodo").modal('open');
		$("#saveTodo").unbind().click(()=>{
			console.log("Previous State: "+this.state.todoList);
			var text = $("#todoText").val();
			$("#todoText").val('');
			var newTodo = this.state.todoList;
			newTodo.push(text);
			this.setState({todoList: newTodo});
			console.log("Current State: "+this.state.todoList);
			$("#newTodo").modal('close');
		});
	}

	editTodo(text, i){
		console.log(text, i);
		console.log("Previous State: "+this.state.todoList);
		var updatedTodo = this.state.todoList;
		updatedTodo[i] = text;
		this.setState({todoList: updatedTodo});
		console.log("Current State: "+this.state.todoList);
	}

	removeTodos(i){
		console.log("Previous State: "+this.state.todoList);
		console.log("Removing Todo: "+i);
		var newTodo = this.state.todoList;
		console.log(newTodo);
		newTodo.splice(i,1);
		this.setState({todoList: newTodo});
		console.log("Current State: "+this.state.todoList);
	}

	render(){
		return (<div className="row">
			<div className="col s2 right">
				<button onClick={this.addTodo.bind(this)} className="btn-floating btn-large waves-effect waves-light red">+</button>
			</div>
			<div className="col s12">
			{ this.state.todoList.map((val,i)=>{ return <Todo key={i} index={i} updateTodo={this.editTodo.bind(this)} deleteTodo={this.removeTodos.bind(this)}>{val}</Todo>}) }
			</div>
			</div>);
	}
}
ReactDOM.render(<TodoList />, document.getElementById("index-banner"));