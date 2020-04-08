// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Facebody20191230.Models
{
    public class ListFaceEntitiesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public ListFaceEntitiesResponseData Data { get; set; }
        public class ListFaceEntitiesResponseData : TeaModel {
            [NameInMap("Token")]
            [Validation(Required=true)]
            public string Token { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("Entities")]
            [Validation(Required=true)]
            public List<ListFaceEntitiesResponseDataEntities> Entities { get; set; }
            public class ListFaceEntitiesResponseDataEntities : TeaModel {
                    public string DbName { get; set; }
                    public string EntityId { get; set; }
                    public int? FaceCount { get; set; }
                    public string Labels { get; set; }
                    public long CreatedAt { get; set; }
                    public long UpdatedAt { get; set; }
            }
        };

    }

}
