// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class ListRemindsResponse : TeaModel {
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
        public ListRemindsResponseData Data { get; set; }
        public class ListRemindsResponseData : TeaModel {
            [NameInMap("PageNumber")]
            [Validation(Required=true)]
            public int? PageNumber { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("Reminds")]
            [Validation(Required=true)]
            public List<ListRemindsResponseDataReminds> Reminds { get; set; }
            public class ListRemindsResponseDataReminds : TeaModel {
                    public long RemindId { get; set; }
                    public string RemindName { get; set; }
                    public string DndStart { get; set; }
                    public string DndEnd { get; set; }
                    public string RemindUnit { get; set; }
                    public string RemindType { get; set; }
                    public string AlertUnit { get; set; }
                    public bool? Useflag { get; set; }
                    public string Founder { get; set; }
                    public List<string> NodeIds { get; set; }
                    public List<string> BaselineIds { get; set; }
                    public List<string> ProjectIds { get; set; }
                    public List<string> BizProcessIds { get; set; }
                    public List<string> AlertMethods { get; set; }
                    public List<string> AlertTargets { get; set; }
            }
        };

    }

}
