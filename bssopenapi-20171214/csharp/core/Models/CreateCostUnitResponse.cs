// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class CreateCostUnitResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public CreateCostUnitResponseData Data { get; set; }
        public class CreateCostUnitResponseData : TeaModel {
            [NameInMap("CostUnitDtoList")]
            [Validation(Required=true)]
            public List<CreateCostUnitResponseDataCostUnitDtoList> CostUnitDtoList { get; set; }
            public class CreateCostUnitResponseDataCostUnitDtoList : TeaModel {
                    public long OwnerUid { get; set; }
                    public long ParentUnitId { get; set; }
                    public long UnitId { get; set; }
                    public string UnitName { get; set; }
            }
        };

    }

}
