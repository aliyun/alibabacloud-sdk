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
        public AttachInstancesResponseBodyList List { get; set; }
        public class AttachInstancesResponseBodyList : TeaModel {
            [NameInMap("list")]
            [Validation(Required=true)]
            public List<AttachInstancesResponseBodyListList> List { get; set; }
            public class AttachInstancesResponseBodyListList : TeaModel {
                    public string Code { get; set; }
                    public string InstanceId { get; set; }
                    public string Message { get; set; }
            }
        };

    }

}
