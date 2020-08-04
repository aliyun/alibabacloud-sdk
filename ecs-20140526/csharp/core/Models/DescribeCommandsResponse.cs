// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeCommandsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public long TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public long PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public long PageSize { get; set; }

        [NameInMap("Commands")]
        [Validation(Required=true)]
        public DescribeCommandsResponseCommands Commands { get; set; }
        public class DescribeCommandsResponseCommands : TeaModel {
            [NameInMap("Command")]
            [Validation(Required=true)]
            public List<DescribeCommandsResponseCommandsCommand> Command { get; set; }
            public class DescribeCommandsResponseCommandsCommand : TeaModel {
                    public string CommandId { get; set; }
                    public string Name { get; set; }
                    public string Type { get; set; }
                    public string Description { get; set; }
                    public string CommandContent { get; set; }
                    public string WorkingDir { get; set; }
                    public long Timeout { get; set; }
                    public int? InvokeTimes { get; set; }
                    public string CreationTime { get; set; }
                    public bool? EnableParameter { get; set; }
                    public DescribeCommandsResponseCommandsCommandParameterNames ParameterNames { get; set; }
                    public class DescribeCommandsResponseCommandsCommandParameterNames : TeaModel {
                        [NameInMap("ParameterName")]
                        [Validation(Required=true)]
                        public List<string> ParameterName { get; set; }

                    }
            }
        };

    }

}
