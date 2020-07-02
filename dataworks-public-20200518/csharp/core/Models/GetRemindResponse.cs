// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetRemindResponse : TeaModel {
        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("ErrorCode")]
        [Validation(Required=true)]
        public string ErrorCode { get; set; }

        [NameInMap("ErrorMessage")]
        [Validation(Required=true)]
        public string ErrorMessage { get; set; }

        [NameInMap("HttpStatusCode")]
        [Validation(Required=true)]
        public int? HttpStatusCode { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public GetRemindResponseData Data { get; set; }
        public class GetRemindResponseData : TeaModel {
            [NameInMap("RemindId")]
            [Validation(Required=true)]
            public long RemindId { get; set; }
            [NameInMap("RemindName")]
            [Validation(Required=true)]
            public string RemindName { get; set; }
            [NameInMap("DndStart")]
            [Validation(Required=true)]
            public string DndStart { get; set; }
            [NameInMap("DndEnd")]
            [Validation(Required=true)]
            public string DndEnd { get; set; }
            [NameInMap("RemindUnit")]
            [Validation(Required=true)]
            public string RemindUnit { get; set; }
            [NameInMap("RemindType")]
            [Validation(Required=true)]
            public string RemindType { get; set; }
            [NameInMap("AlertUnit")]
            [Validation(Required=true)]
            public string AlertUnit { get; set; }
            [NameInMap("Useflag")]
            [Validation(Required=true)]
            public bool? Useflag { get; set; }
            [NameInMap("Founder")]
            [Validation(Required=true)]
            public string Founder { get; set; }
            [NameInMap("AlertInterval")]
            [Validation(Required=true)]
            public int? AlertInterval { get; set; }
            [NameInMap("Detail")]
            [Validation(Required=true)]
            public string Detail { get; set; }
            [NameInMap("MaxAlertTimes")]
            [Validation(Required=true)]
            public int? MaxAlertTimes { get; set; }
            [NameInMap("Robots")]
            [Validation(Required=true)]
            public List<GetRemindResponseDataRobots> Robots { get; set; }
            public class GetRemindResponseDataRobots : TeaModel {
                    public string WebUrl { get; set; }
                    public bool? AtAll { get; set; }
            }
            [NameInMap("Nodes")]
            [Validation(Required=true)]
            public List<GetRemindResponseDataNodes> Nodes { get; set; }
            public class GetRemindResponseDataNodes : TeaModel {
                    public long NodeId { get; set; }
                    public string NodeName { get; set; }
                    public string Owner { get; set; }
                    public long ProjectId { get; set; }
            }
            [NameInMap("Baselines")]
            [Validation(Required=true)]
            public List<GetRemindResponseDataBaselines> Baselines { get; set; }
            public class GetRemindResponseDataBaselines : TeaModel {
                    public long BaselineId { get; set; }
                    public string BaselineName { get; set; }
            }
            [NameInMap("Projects")]
            [Validation(Required=true)]
            public List<GetRemindResponseDataProjects> Projects { get; set; }
            public class GetRemindResponseDataProjects : TeaModel {
                    public long ProjectId { get; set; }
            }
            [NameInMap("BizProcesses")]
            [Validation(Required=true)]
            public List<GetRemindResponseDataBizProcesses> BizProcesses { get; set; }
            public class GetRemindResponseDataBizProcesses : TeaModel {
                    public long BizId { get; set; }
                    public string BizProcessName { get; set; }
            }
            [NameInMap("AlertMethods")]
            [Validation(Required=true)]
            public List<string> AlertMethods { get; set; }
            [NameInMap("AlertTargets")]
            [Validation(Required=true)]
            public List<string> AlertTargets { get; set; }
        };

    }

}
