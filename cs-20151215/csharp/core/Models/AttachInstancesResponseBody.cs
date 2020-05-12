// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.CS20151215.Models
{
    public class AttachInstancesResponseBody : TeaModel {
        [NameInMap("task_id")]
        [Validation(Required=true)]
        public string TaskId { get; set; }

        [NameInMap("list")]
        [Validation(Required=true)]
        public List<AttachInstancesResponseBodyList> List { get; set; }
        public class AttachInstancesResponseBodyList : TeaModel {
            [NameInMap("code")]
            [Validation(Required=true)]
            public string Code { get; set; }

            [NameInMap("instanceId")]
            [Validation(Required=true)]
            public string InstanceId { get; set; }

            [NameInMap("message")]
            [Validation(Required=true)]
            public string Message { get; set; }

        }

    }

}
