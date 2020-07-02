// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class ListCalcEnginesResponse : TeaModel {
        [NameInMap("HttpStatusCode")]
        [Validation(Required=true)]
        public int? HttpStatusCode { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public ListCalcEnginesResponseData Data { get; set; }
        public class ListCalcEnginesResponseData : TeaModel {
            [NameInMap("PageNumber")]
            [Validation(Required=true)]
            public int? PageNumber { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("CalcEngines")]
            [Validation(Required=true)]
            public List<ListCalcEnginesResponseDataCalcEngines> CalcEngines { get; set; }
            public class ListCalcEnginesResponseDataCalcEngines : TeaModel {
                    public string CalcEngineType { get; set; }
                    public string GmtCreate { get; set; }
                    public string DwRegion { get; set; }
                    public bool? IsDefault { get; set; }
                    public int? BindingProjectId { get; set; }
                    public string EnvType { get; set; }
                    public long TenantId { get; set; }
                    public string Name { get; set; }
                    public string BindingProjectName { get; set; }
                    public string Region { get; set; }
                    public int? EngineId { get; set; }
                    public Dictionary<string, string> EngineInfo { get; set; }
                    public string TaskAuthType { get; set; }
            }
        };

    }

}
